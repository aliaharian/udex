<?php

namespace App\Http\Controllers\Dashboard\Payments;

use App\Http\Controllers\Controller;
use App\Model\Design;
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


class PaymentsController extends Controller {
    public function index() {
<<<<<<< HEAD
        $Payments = Invoice::orderBy('created_at', 'asc')->paginate(20);
=======
        $Payments = Invoice::orderBy('bt_transfer', 'desc')->paginate(20);

>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
        return view('admin.payments.index', compact('Payments'));
    }

    public function edit($id) {
        $Payment = Invoice::find($id);

        return view('admin.payments.edit', compact('Payment'));
    }
}
