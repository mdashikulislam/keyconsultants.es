@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    Conveyancing Assistance
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" style="margin-top: 30px;">
                    <div class="area">
                        <h4>Let Key Consultants assist you in the buying or selling of your property here in Mallorca.</h4>
                        <p class="mt-4">If you are looking to buy or sell a property here in Mallorca then you will need to  instruct someone to assist you with the paperwork.  Let Key Consultants help you. We are friendly an approachable and what´s more, our fees are very competitive too!</p>
                        <p>Most professionals will charge you 1% of the overall property price for completing the transaction and filing the respective taxes. If your sale or purchase price of your apartment is for example, 200.000€ the industry standard would be 2.000€ plus IVA at key consultants our fees start at 1.250€ plus IVA without any compromise on service.   Like any aspect of public administration in Spain if you do not have the correct paperwork at hand, this could result in an abortive transaction </p>
                        <p>We can also help you if you have inherited a property and need to have it registered into your name, would like to have a charge or mortgage removed from your property title or need your property title rectified.  </p>
                    </div>
                    <div class="list mt-3">
                        <h3 style="color: #c0b298;margin-bottom: 20px;">What does our Conveyancing Service include</h3>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <h5>Conveyancing Assistance on Purchase</h5>
                                <ul style="list-style-type: square">
                                    <li>Reviewing the option contract for signature</li>
                                    <li>Review of the title deeds</li>
                                    <li>Obtaining the IBI & Basura receipts</li>
                                    <li>Reviewing the certificate of Habitability & Energy Performance.</li>
                                    <li>Obtaining a certificate of conformity from the local town hall.</li>
                                    <li>Attendance at the Notary to assist you in completing the purchase</li>
                                    <li>Payment of the Retention taxes (Plusvalia & 3%)</li>
                                    <li>Preparation and submission and payment of your taxes (stamp duty) – Modelo 600</li>
                                    <li>Attendance at ATIB (Agencia Tributaria Illes Baleares)</li>
                                    <li>Prepare and serve notice of new ownership on the administrator.</li>
                                    <li>Attend to the Registration Process with the land registry</li>
                                    <li>Assistance with the changing of your utility bills</li>
                                </ul>
                                <div class="bottom">
                                    <p>Purchase Assistance from</p>
                                    <h2>1.250€ (plus IVA)</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <h5>Conveyancing Assistance on Sale</h5>
                                <ul style="list-style-type: square">
                                    <li>Preparing the option contract for sale for exchange.</li>
                                    <li>Acting as the depositary  of funds using our client funds account</li>
                                    <li>Obtaining a statement of plusvalia</li>
                                    <li>Obtaining IBI and Basura Receipts</li>
                                    <li>Instructing the Energy Performance certificate (disbursement)</li>
                                    <li>Instructing the Cedular de habitabilidad.</li>
                                    <li>Preparation of the documents before the public notary to be included in the public deed</li>
                                    <li>Preparing the apportionments (community and IBI)</li>
                                    <li>Preparing the completion statement for sale</li>
                                    <li>Preparing all documents before the public notary.</li>
                                    <li>Obtaining the 3% retention payment statement from the purchasers</li>
                                    <li>Obtaining the Plus Val Payment receipt from the purchasers</li>
                                </ul>
                                <div class="bottom">
                                    <p>Sale  Assistance from </p>
                                    <h2>1.250€ (plus IVA)</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-50">
                        <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
                    </div>
                </div>
                <div class="com-md-3 col-lg-3 col-xs 12 col-sm-12" style="margin-top: 30px;">
                    <div class="right">
                        <p>Let Key Consultants help buy or sell your property from only 1.250€ plus IVA</p>
                        <p>I Think we should have a picture here with this on – like a banner advert.</p>
                        <p>Find out more then link to contact us page</p>
                    </div>
                    <div class="wide" style="text-align: center;background: #c0b298;padding: 30px;margin-top: 30px;font-size: 16px;">
                        <a href="https://www.atib.es/TA/contenido.aspx?Id=9854&lang=es" style="color: #fff;">View ITP (Stamp duty) tax rates here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="callto-action-area"
        style="background: url('{{asset('frontend/assets/images/bg/cta.webp')}}') no-repeat center center fixed"
    >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2>WORKING TOGETHER TO ENSURE YOUR PROPERTY TRANSACTION RUNS SMOOTHLY</h2>
                    <p>
                        As apart of our service, we will always ensure that we provide you with transparency of
                        service, ensuring that you receive the best, guaranteed cost effective and quality assured
                        service possible.
                    </p>
                    <div class="devaidar"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <style>
        .area p{
            display: flex;
            justify-content: center;
        }
        .list ul {
            background: #dededc;
            border-radius: 4px;
            padding: 20px 30px;
            margin-top: 20px;
            height: 520px;
        }
        .right{
            background: #dededc;
            padding: 20px;
            border-radius: 4px ;
        }
        .bottom{
            margin-top: 20px;
            background: #c0b298;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

    </style>
    @endpush
