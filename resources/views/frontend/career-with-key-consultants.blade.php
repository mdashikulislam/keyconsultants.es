@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    CAREERS
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="careers-content">
                        <h2>Careers with key consultants</h2>
                        <p>
                            Unfortunately we do not have any vacancies at the moment, but please do feel free to
                            send us your CV together with a covering letter detailing your experience to
                            hola@keyconsultants.es and if a position does become available that meets your
                            experience , we will contact you.
                        </p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
