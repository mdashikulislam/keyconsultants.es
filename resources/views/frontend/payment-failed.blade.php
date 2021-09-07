@extends('frontend.layouts.inner-master')
@section('content')
    <div class="sale-breadcumb-area" style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain">
        <div class="container">
            <h2 class="sale-breadcumb-title" style="font-size: 50px;">Payment Success</h2>
        </div>
    </div>
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-6 col-12 offset-3">
                <div class="cards">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;display: flex;align-items: center;justify-content: center">
                        <i class="fa fa-times"></i>
                    </div>
                    <h1 class="mt-4" style="color: red">Failed</h1>
                    <p>Oh! No! Payment Failed</p>
                    <a href="{{route('payment')}}" class="btn btn-success mt-4">Try Again</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }
        .cards h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }
        .cards p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size:20px;
            margin: 0;
        }
        .cards i {
            color: red;
            font-size: 100px!important;
            line-height: 200px;
        }
        .cards {
            background: white;
            width: 100%;
            padding: 60px 0;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
            text-align: center;
        }
    </style>
@endpush
