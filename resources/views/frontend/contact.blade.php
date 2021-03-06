@extends('frontend.layouts.inner-master')
@section('content')
    <div class="google-map-area">
        <iframe
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?q=Carrer%20de%20Ramon%20de%20Montcada%2C%202%2C%2007183%20Rotes%20Velles%2C%20Illes%20Balears&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
            title="Carrer de Ramon de Montcada, 2, 07183 Rotes Velles, Illes Balears"
            aria-label="Carrer de Ramon de Montcada, 2, 07183 Rotes Velles, Illes Balears"
        ></iframe>
    </div>
    <div class="contact-area">
        <div class="container">
            <h1 class="contact-title">Get In touch</h1>
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <form class="contact-form-wrap" action="{{route('user.contact.form')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" placeholder="Name" value="{{old('name')}}" name="name" id="name" />
                                @error('name')
                                <span class="invalid-feedback" style="display: block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" placeholder="Email" value="{{old('email')}}" name="email" id="email" />
                                @error('email')
                                <span class="invalid-feedback" style="display: block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="tel" placeholder="Phone" value="{{old('phone')}}" name="phone" id="phone" />
                                @error('phone')
                                <span class="invalid-feedback" style="display: block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="text" placeholder="Subject" value="{{old('subject')}}" name="subject" id="subject" />
                                @error('subject')
                                <span class="invalid-feedback" style="display: block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Tell Us More"  name="message">{{old('message')}}</textarea>
                                @error('message')
                                <span class="invalid-feedback" style="display: block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-right">
                                <button class="submit" type="submit">
                                    Submit <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-12">
                    <ul class="contact-info">
                        <li>
                            <i class="fa fa-phone"></i>
                            <h3>(+34) 871 046 034</h3>
                        </li>
                        <li>
                            <i class="fa fa-location-arrow"></i>
                            <span>Ramon de Montcada 2 Local 4 ??? 07180, Santa Pon??a, Mallorca</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <h4>hola@keyconsultants.es</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-content-wrapper">
        <div class="container">
            <p>
                Our offices are located in Santa Ponsa, in the South West of the Island. However, We represent
                clients all over the Island, including Palma, Illetes, Portals Nous, Calvia, Puerto Portals, Palma
                Nova, Santa Ponsa, Paguera and Andratx.
            </p>
            <p>Please feel free to contact us</p>
            <ul>
                <li>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
@endsection

