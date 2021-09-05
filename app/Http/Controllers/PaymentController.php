<?php

namespace App\Http\Controllers;

use App\Models\SpanishWill;
use App\Models\Transaction;
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
        $willSession  = \Session::get('will_id');
        if (empty($willSession)){
            toast('You need to fill the form','error');
            return redirect()->route('will.form');
        }
        \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));
        $willData = SpanishWill::where('id',$willSession)->first();
        if (empty($willData)){
            toast('You need to fill the form','error');
            return redirect()->route('will.form');
        }
        $token = $request->stripeToken;
        $charge = \Stripe\Charge::create([
            'amount' => 90 * 100,
            'currency' => 'usd',
            'description' => 'For Creating will',
            'source' => $token,
            'receipt_email'=>$willData->email
        ]);
        if (isset($charge) && $charge->status == 'succeeded'){
            \DB::beginTransaction();
            try {
                $transaction = new Transaction();
                $transaction->will_id = $willData->id;
                $transaction->trx_id = $charge->id;
                $transaction->amount = round((int)$charge->amount / 100);
                $transaction->receipt_email = $charge->receipt_email;
                $transaction->receipt_number = $willData->telephone;
                $transaction->receipt_url = $charge->receipt_url;
                $transaction->balance_transaction = $charge->balance_transaction;
                $transaction->save();
                $willData->payment_status = 'Accept';
                $willData->save();
                \DB::commit();
                $request->session()->forget('will_id');
                toast('Payment successful','success');
                return redirect()->route('spanish.will');
            }catch (\Exception $exception){
                \DB::rollBack();
            }
        }else{
            toast('Payment failed','error');
            return redirect()->route('will.form');
        }
    }
}
