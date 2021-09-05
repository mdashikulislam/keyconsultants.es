<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentAction(Request $request)
    {
       return $request->all();
    }

    public function paymentAttempt(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51JVtKLIdRtJSsrCanHLUhN1OIu15WaO4aC53wArDdTqzTz0zu4jLKjghADqopnSiX2fKEESO12gLcMJhuFOiCbFv002ugjSjY4');
        $token = $request->stripeToken;
        $charge = \Stripe\Charge::create([
            'amount' => 90 * 100,
            'currency' => 'usd',
            'description' => 'For Creating will',
            'source' => $token,
        ]);

        return $charge;
    }
}
