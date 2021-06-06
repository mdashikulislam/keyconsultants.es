@extends('frontend.layouts.inner-master')

@section('content')
    <div
        class="breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/property.webp')}}') no-repeat center center / cover"
    >
        <div class="container">
            <h1 class="breadcumb-title">About Us</h1>
            <p class="breadcumb-content">
                Key Consultants was born out of the frustration of other accountancy and property services offered
                in Mallorca and the lack of advice and customer service given by gestors to their clients when
                opening or operating a business (or when buying a selling a property here). Our Aim is to change all
                of that and provide only the best customer service to all of our clients.
            </p>
        </div>

        <div class="breadcumb-shape" data-negative="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path
                    class="elementor-shape-fill"
                    d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"
                ></path>
            </svg>
        </div>
    </div>
    <div class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6">
                    <a href="facebook.com" target="_blank" class="facebook social-wrap">
                        <i class="fa fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <a href="twitter.com" target="_blank" class="twitter social-wrap">
                        <i class="fa fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <a href="facebook.com" target="_blank" class="linkedin social-wrap">
                        <i class="fa fa-linkedin"></i>
                        <span>Linkedin</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-75">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="careers-content text-left">
                    <h2 class="text-center">WHO WE ARE</h2>
                    <p>
                        We fully appreciate that our success depends on your success, so at Key Consultants, our aim
                        is not only to provide you with cost effective accountancy,&nbsp; legal, property and
                        business support services, but also to guide you through the whole process and make sure
                        that your transaction, whatever that may be, is undertaken informatively and without any
                        nasty surprises.
                    </p>
                    <p>
                        No matter what service of ours you decide to use, you will always be advised and given
                        guidance as to what is happening every step of the way. We are a one stop shop for all of
                        your needs here on Mallorca – and what´s more we are friendly and approachable too.
                    </p>
                    <p>Our Services include;</p>
                    <ul>
                        <li>Business Start-up &amp; Formation</li>
                        <li>Accounts and Payroll</li>
                        <li>Taxation</li>
                        <li>Legal Services</li>
                        <li>Property Sales and Rentals</li>
                        <li>Wills and Administration of Estates</li>
                        <li>Vehicle Transfers</li>
                        <li>NIE &amp; Residency Applications</li>
                        <li>Insurance Matters</li>
                    </ul>
                    <p>
                        Key Consultants was born out of the frustration of other accountancy and property services
                        offered in Mallorca and the lack of advice and customer service given by gestors to their
                        clients when opening or operating a business (or when buying a selling a property here). Our
                        Aim is to change all of that and provide only the best customer service to all of our
                        clients.
                    </p>
                    <p>
                        At Key consultants we will not simply open a business for you and let you get on with it,
                        dealing with problems as and when they arrive. On the contrary, we offer proactive not
                        reactive services. We will take the time to explain to you the level of IVA you need to
                        charge and pay, important TAX dates, the level of activity you need, the need for data
                        protection, amongst other things, to ensure that your business meets the legal requirements
                        needed.
                    </p>
                    <p>
                        When purchasing or selling a property here on the island, we will explain the whole process
                        to you, the stages that will take place and what is expected from you. We will never leave
                        you waiting around in the dark.
                    </p>
                    <p>
                        If Spanish is not you first language, then our multi lingual staff will explain everything
                        to you to ensure you fully understand your legal requirements of opening a business or
                        owning a property here.
                    </p>
                    <p>
                        Like we said before, our success depends on your success and we succeed so why not give us a
                        try.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
