<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Model\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;


class PaymentController extends Controller {
    public function __construct() {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /* Show Invoice List */
    public function index() {
        $user = auth()->user();
        if (isset($_GET['status'])) {
            $Payments = Invoice::where('uid', $user->id)->where('status', $_GET['status'])->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $Payments = Invoice::where('uid', $user->id)->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('site.profile.payments.index', compact('Payments'));
    }

    /* Show Invoice */
    public function show($id) {
        $User = auth()->user();
        $Payment = Invoice::where('id', $id)->where('uid', $User->id)->first();

        if (!empty($Payment)) {
            return view('site.profile.payments.show', compact('Payment'));
        } else {
            return \redirect('profile/payments');
        }
    }

    /* Post to PayPal */
    public function payWithpaypal(Request $request) {
        if (isset($request->pay_type) && $request->pay_type == 'design') {
            $OrderId = basename(parse_url(URL::previous())['path']);
            $Invoice = Invoice::where('order_id', $OrderId)->where('status', 'unpaid')->orderBy('payment_step', 'asc')->first();
            $PayID = $Invoice->id;
        } elseif (isset($request->pay_type) && $request->pay_type == 'payment') {
            $PayID = basename(parse_url(URL::previous())['path']);
        }

        $Invoice = Invoice::find($PayID);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Order ' . $PayID)/** item name **/
        ->setCurrency('GBP')
            ->setDescription('design')
            ->setSku($PayID)
            ->setQuantity(1)
            ->setPrice($Invoice->amount);
        /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('GBP')
            ->setTotal($Invoice->amount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('UDEX Transaction');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status', $PayID))/** Specify return URL **/
        ->setCancelUrl(URL::route('status', ['id' => $PayID]));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::route('paywithpaypal');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('paywithpaypal');

            }

        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('paywithpaypal');

    }

    /* Paypal Status Callback */
    public function getPaymentStatus(Request $request) {

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty($request->PayerID) || empty($request->token)) {

            \Session::put('error', 'Payment failed');
            return \redirect('profile/payments');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution;
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        $GetOrderDetails = $result->transactions[0]->item_list->items[0];

        if ($result->getState() == 'approved') {


            $Invoice = Invoice::find($GetOrderDetails->sku);
            $Invoice->status = 'paid';
            $Invoice->payer_id = $execution->payer_id;

            $Invoice->update();

            \Session::put('success', 'Payment success');
            return \redirect('profile/payments' . '/' . $GetOrderDetails->sku);

        }

        \Session::put('error', 'Payment failed');
        return \redirect('profile/payments' . '/' . $GetOrderDetails->sku);

    }

    /* By Transfer */
    public function ByTransfer($id) {
        $Payment = Invoice::find($id);

        return view('site.profile.payments.by-transfer', compact('Payment'));
    }

    /* By Transfer */
    public function ByTransferSubmit($id) {
        $Payment = Invoice::find($id);

        \Session::put('success', 'Submit Request');
        $Payment->bt_transfer = 1;

        if ($Payment->update()) {
            return \redirect()->back();
        }
    }
}

