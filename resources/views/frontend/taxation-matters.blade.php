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
                            <strong><u>Taxation Matters</u></strong>
                        </p>
                        <p>
                            We can also prepare and submit your quarterly taxes Modelo 130 (Personal tax) and Modelo
                            303 (IVA) as well as deal with any personal or professional retentions that you may need
                            to pay (M115 &amp; 111). &nbsp;
                        </p>
                        <p>
                            At the end of the year, we can submit you’re your yearly resumes in respect of your tax
                            and IVA &nbsp;(Modelos 180&nbsp; + 190) as well as prepare your personal tax return.
                        </p>
                        <p>
                            If you are looking to start a business or you already have a business, speak to us to
                            see how we can help assist your business processes.&nbsp;
                        </p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.contact-banner')
@endsection
