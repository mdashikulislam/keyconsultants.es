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
                        <a href="index.html">
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
                    @include('frontend.layouts.menu')
                </div>
            </div>
        </div>
        <ul class="mainmenu-responsive">
            <li>
                <a href="index.html" class="active">Home</a>
            </li>
            <li>
                <span>For Individuals <i class="fa fa-caret-down"></i></span>
                <ul class="submenu">
                    <li>
                        <a href="property-sales.html">Real Estate Services</a>
                    </li>
                    <li>
                        <a href="conveyancing-assistance.html">Conveyancing</a>
                    </li>
                    <li>
                        <a href="non-resident-services.html">Non-Resident Taxes</a>
                    </li>
                    <li>
                        <a href="wills-probate.html">Wills &amp; Probate</a>
                    </li>
                    <li>
                        <a href="power-of-attorney.html">Power Of Attorney</a>
                    </li>
                    <li>
                        <a href="energy-performance-certificate.html"
                        >Energy Performance Certificate</a
                        >
                    </li>
                    <li>
                        <a href="cedular-de-habitabilidad.html">Cedular de Habitabilidad</a>
                    </li>
                    <li>
                        <a href="insurance-services.html">Insurance Services</a>
                    </li>
                    <li>
                        <a href="green-energy.html">Green Electricity</a>
                    </li>
                </ul>
            </li>
            <li>
                <span>For Businesess <i class="fa fa-caret-down"></i></span>
                <ul class="submenu">
                    <li><a href="our-fees.html">For Businesess</a></li>
                    <li>
                        <a href="administracion-de-fincas.html">Finca Administration</a>
                    </li>
                    <li>
                        <a href="our-fees.html">Our Fees</a>
                    </li>
                    <li>
                        <a href="accounts-bookkeeping.html">Accounts &amp; Bookkeeping</a>
                    </li>
                    <li>
                        <a href="taxation-matters.html">Taxation Matters</a>
                    </li>
                </ul>
            </li>
            <li>
                <span>About Us <i class="fa fa-caret-down"></i></span>
                <ul class="submenu">
                    <li> <a href="about-us.html">About Us <i class="fa fa-caret-down"></i></a></li>
                    <li>
                        <a href="meet-our-team.html">Meet Our Team</a>
                    </li>
                    <li>
                        <a href="career-with-key-consultants.html">Career with Key Consultants</a>
                    </li>
                    <li>
                        <a href="privacy-cookie-policy.html">Privacy &amp; Cookie Policy</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="properties.html">Property Search</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</header>
