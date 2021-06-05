<!DOCTYPE html>
<html>
@include('frontend.layouts.head')

<body>
<header class="header-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-10">
                    <ul class="header-contact d-flex flex-wrap align-items-center">
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:(+34) 871 046 034">(+34) 871 046 034</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i
                            ><a href="http://hola@keyconsultants.es" target="_blank">hola@keyconsultants.es</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>Ramon de Montcada 2 Local 4 - 07180, Santa Ponça,
                            Mallorca
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-12">
                    <ul class="social-share d-flex justify-content-end">
                        <li>
                            <a target="_blank" href="https://twitter.com/keyconsultants1">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/keyconsultantsmallorca">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a
                                target="_blank"
                                href="https://www.linkedin.com/company/key-consultants-mallorca/"
                            >
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-8 col-xl-4 col-lg-3">
                    <div class="logo">
                        <a href="{{route('landing')}}">
                            <img src="{{asset('frontend/assets/images/logo.webp')}}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-4 text-right d-block d-lg-none text-right">
                            <span class="responsive-trigger">
                                <i class="fa fa-bars"></i>
                            </span>
                </div>
                <div class="col-xl-8 col-lg-9 col-12 d-none d-lg-block">
                    <ul class="mainmenu">
                         @include('frontend.include.menu')
                    </ul>
                </div>
            </div>
        </div>
        <ul class="mainmenu-responsive">
            @include('frontend.include.menu')
        </ul>
    </div>
</header>
