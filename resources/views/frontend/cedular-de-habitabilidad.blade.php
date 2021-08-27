@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    CEDULAR DE HABITABILIDAD
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <p>
                            At&nbsp;<strong>Key Consultants Mallorca</strong>&nbsp; we are pleased to offer you our
                            outstanding Administración de Fincas – a complete professional service for your
                            community with a personal touch.
                        </p>
                        <p>
                            We are not just administrators of your community, we want you to think that we are part
                            of it.&nbsp; We will assist the president and works committee members in every way we
                            can to ensure the correct running of your community. We have invested in the latest IT
                            equipment and providing an online portal that can be accessed 24/7 by every property
                            owner within your &nbsp;community. In the portal you can see your co-efficient, access
                            your accounts, change your bank details, report a complaint and much much more.
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
                    <h2>WORKING TOGETHER TO ENSURE YOUR PROPERTY SALE RUNS SMOOTHLY</h2>
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
