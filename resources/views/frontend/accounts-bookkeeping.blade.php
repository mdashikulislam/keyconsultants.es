@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    ACCOUNTS AND BOOKKEEPING
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <p>
                            <strong><u>Accounts and Book keeping </u></strong>
                        </p>
                        <p>
                            At Key Consultants we help a number of clients keep their company books in order as well
                            as submitting their monthly taxes.&nbsp; We can advise you on what you can claim, what
                            assets you might want to depreciate and what levels of VAT (IVA) and tax you are
                            going&nbsp; to need to charge your clients and/or pay yourself.
                        </p>
                        <p>
                            We offer our monthly book keeping service. You simply drop all of your invoices and
                            expenses to us and we will process them and calculate your taxes and IVA. &nbsp;Our
                            prices start from as little as 50€ per month Plus IVA for small autonomos.
                        </p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Get Quote</a>
                        </div>
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
                    <h2>WORKING TOGETHER TO ENSURE YOUR BUSINESS RUNS SMOOTHLY</h2>
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
