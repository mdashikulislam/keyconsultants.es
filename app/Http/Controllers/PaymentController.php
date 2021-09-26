<?php

namespace App\Http\Controllers;

use App\Models\OnlineTax;
use App\Models\SpanishWill;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'amount' => 108.9 * 100,
            'currency' => 'EUR',
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
                $transaction->form_type = 'Will Form';
                $transaction->balance_transaction = $charge->balance_transaction;
                $transaction->save();
                $willData->payment_status = 'Accept';
                $willData->save();
                \DB::commit();
                $request->session()->forget('will_id');
                return redirect()->route('payment.success');
            }catch (\Exception $exception){
                \DB::rollBack();
                return redirect()->route('payment.failed');
            }
        }else{
            toast('Payment failed','error');
            return redirect()->route('will.form');
        }
    }

    public function paymentSuccess()
    {
        return view('frontend.payment-success');
    }

    public function paymentFailed()
    {
        return view('frontend.payment-failed');
    }

    public function taxFeePayment()
    {
        $taxId = Session::get('tax_id');
        if (empty($taxId)){
            toast('Please fill the form first','error');
            return redirect()->route('online.tax.return');
        }
        $info = OnlineTax::where('id',$taxId)->first();
        return view('frontend.tax-payment')
            ->with([
                'info'=>$info
            ]);
    }

    public function taxFeePaymentPost(Request $request)
    {
        $taxId = OnlineTax::where('id',$request->id)->first();
        if (empty($taxId)){
            toast('You need to fill the form','error');
            return redirect()->route('online.tax.return');
        }
        \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));
        $token = $request->stripeToken;
        $charge = \Stripe\Charge::create([
            'amount' => $taxId->total_amount * 100,
            'currency' => 'EUR',
            'description' => 'For Creating will',
            'source' => $token,
            'receipt_email'=>$request->email
        ]);
        if (isset($charge) && $charge->status == 'succeeded'){
            \DB::beginTransaction();
            try{
                $transaction = new Transaction();
                $transaction->will_id = $taxId->id;
                $transaction->trx_id = $charge->id;
                $transaction->amount = round((int)$charge->amount / 100,2);
                $transaction->receipt_email = $charge->receipt_email;
                $transaction->receipt_number = $request->telephone;
                $transaction->receipt_url = $charge->receipt_url;
                $transaction->form_type = 'Online Tax';
                $transaction->balance_transaction = $charge->balance_transaction;
                $transaction->save();
                $taxId->contact_email = $request->email;
                $taxId->contact_telephone = $request->telephone;
                $taxId->status = 'Accept';
                $taxId->save();
                \DB::commit();
                $request->session()->forget('tax_id');
                return redirect()->route('payment.success');
            }catch (\Exception $exception){
                \DB::rollBack();
                toast('Payment failed','error');
                return redirect()->route('tax.fee.payment');
            }
        }
        return $charge;
    }
}
