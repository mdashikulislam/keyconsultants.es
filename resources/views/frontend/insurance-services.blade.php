@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    insurance services
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <div class="insurance">
                            <h2 style="color: #c0b298;" class="d-flex justify-content-center">Select Insurance Type</h2>
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-heart"></i>
                                                <h2>HEALTH INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-home"></i>
                                                <h2>HOME INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-hotel"></i>
                                                <h2>HOLIDAY HOME INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-car"></i>
                                                <h2>CAR INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-ship"></i>
                                                <h2>BOAT INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-12">
                                    <div class="card mt-5">
                                        <a href="#">
                                            <div class="box d-flex align-items-center">
                                                <i class="fa fa-paw"></i>
                                                <h2>PET INSURANCE</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <h2>WORKING TOGETHER TO ENSURE YOU GET THE BEST INSURANCE COVER</h2>
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
        .card{
            border-color: #c0b298!important;
        }
        .card a{
            color: #2d2d2a;

        }
        .card a h2{
            font-size: 20px;
        }
        .box i{
            background: #c0b298;
            color: #fff;
            padding: 24px;
            font-size: 38px;
            margin-right: 10px;
        }
        @media only screen and (max-width:991px) and (min-width: 768px) {
            .card a h2{
                font-size: 18px;
            }
        }
    </style>
@endpush
