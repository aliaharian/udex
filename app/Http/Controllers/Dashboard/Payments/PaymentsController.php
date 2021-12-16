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
        $Payments = Invoice::orderBy('created_at', 'asc')->paginate(20);
        return view('admin.payments.index', compact('Payments'));
    }

    public function edit($id) {
        $Payment = Invoice::find($id);

        return view('admin.payments.edit', compact('Payment'));
    }
}
