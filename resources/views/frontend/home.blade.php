@extends('frontend.layouts.master')
@section('content')
    <div class="hero-area">
        <div class="slider-active">
            <div
                class="slider-item"
                style="background: url('{{asset('frontend/assets/images/slider/img1.jpg')}}') no-repeat center center / cover"
            >
                <div class="slider-content">
                    <h2>Find your next home with Key Consultants</h2>
                    <h4 class="fs-45 text-uppercase color-white">MALLORCA</h4>
                    <a href="{{route('properties')}}">SEARCH OUR PROPERTIES</a>
                </div>
            </div>
            <div
                class="slider-item"
                style="background: url('{{asset('frontend/assets/images/slider/img3.jpg')}}') no-repeat center center / cover"
            >
                <div class="slider-content">
                    <h2>Community Management</h2>
                    <h3 class="fs-45 text-uppercase color-white">(Administracíon de Fincas)</h3>
                    <a href="{{route('properties')}}">Find out More</a>
                </div>
            </div>
            <div
                class="slider-item"
                style="background: url('{{asset('frontend/assets/images/slider/img2.jpg')}}') no-repeat center center / cover"
            >
                <div class="slider-content">
                    <h2>Services for Non-Residents</h2>
                    <h2 class="fs-30">MALLORCA</h2>

                    <a href="{{route('properties')}}">Find out More</a>
                </div>
            </div>
            <div
                class="slider-item"
                style="background: url('{{asset('frontend/assets/images/slider/img3.jpg')}}') no-repeat center center / cover"
            >
                <div class="slider-content">
                    <h2 class="fs-40">View our Selection of Exclusive Properties</h2>
                    <a href="{{route('properties')}}">Take me there </a>
                </div>
            </div>
        </div>
    </div>
    <div class="sale-rent-area">
        <div class="container">
            <ul class="sale-rent-btns d-flex flex-wrap align-items-center">
                <li><a class="sale" href="sale.html">Sale</a></li>
                <li><a class="rent" href="rent.html">Rent</a></li>
            </ul>
            <div class="row">
                <div class="col-lg-9">
                    <form class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <select class="select-style" name="reference_number">
                                <option value="">Reference Number...</option>
                                <option value="SP-1108">SP-1108</option>
                                <option value="SP-1117">SP-1117</option>
                                <option value="CC-1138">CC-1138</option>
                                <option value="57682">57682</option>
                                <option value="30010">30010</option>
                                <option value="30003">30003</option>
                                <option value="KC30002">KC30002</option>
                                <option value="KC30010">KC30010</option>
                                <option value="KC30003">KC30003</option>
                                <option value="KC30001">KC30001</option>
                                <option value="KC25811">KC25811</option>
                                <option value="MM25695">MM25695</option>
                                <option value="KS25613">KS25613</option>
                                <option value="MM25552">MM25552</option>
                                <option value="KC25481">KC25481</option>
                                <option value="KC25457">KC25457</option>
                                <option value="KC25406">KC25406</option>
                                <option value="KC24795">KC24795</option>
                                <option value="MM24678">MM24678</option>
                                <option value="MM24615">MM24615</option>
                                <option value="MM24600">MM24600</option>
                                <option value="MM24419">MM24419</option>
                                <option value="LSP24219">LSP24219</option>
                                <option value="MM24087">MM24087</option>
                                <option value="MM23470">MM23470</option>
                                <option value="KC23210">KC23210</option>
                                <option value="KC22824">KC22824</option>
                                <option value="KC22806">KC22806</option>
                                <option value="LSP22743">LSP22743</option>
                                <option value="LSP22730">LSP22730</option>
                                <option value="KC20197">KC20197</option>
                                <option value="KC21184">KC21184</option>
                                <option value="KC30030">KC30030</option>
                                <option value="KC30040">KC30040</option>
                                <option value="KC30050">KC30050</option>
                                <option value="KC30060">KC30060</option>
                                <option value="KC30032">KC30032</option>
                                <option value="KC30033">KC30033</option>
                                <option value="KC30034">KC30034</option>
                                <option value="KC30070">KC30070</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <select class="select-style" name="city">
                                <option value="">Select City...</option>
                                <option value="Alcudia">Alcudia</option>
                                <option value="Binssalem">Binssalem</option>
                                <option value="Cala Ratjada">Cala Ratjada</option>
                                <option value="Cala d'Or">Cala d'Or</option>
                                <option value="Cala Moraia">Cala Moraia</option>
                                <option value="Cala Millor">Cala Millor</option>
                                <option value="Calvià Pueblo">Calvià Pueblo</option>
                                <option value="Costa de la Calma">Costa de la Calma</option>
                                <option value="Deià">Deià</option>
                                <option value="Esporles">Esporles</option>
                                <option value="Fornalutx">Fornalutx</option>
                                <option value="Inca">Inca</option>
                                <option value="Manacor">Manacor</option>
                                <option value="Palma de Mallorca">Palma de Mallorca</option>
                                <option value="Pollença">Pollença</option>
                                <option value="Puerto Pollensa">Puerto Pollensa</option>
                                <option value="Sa Pobla">Sa Pobla</option>
                                <option value="Santa Ponça">Santa Ponsa</option>
                                <option value="S´Arraco">S'Arraco</option>
                                <option value="Sineu">Sineu</option>
                                <option value="Sóller">Sóller</option>
                                <option value="Valldemossa">Valldemossa</option>
                                <option value="Port Andratx">Port Andratx</option>
                                <option value="El Toro">El Toro</option>
                                <option value="Son Ferrer">Son Ferrer</option>
                                <option value="Paguera">Paguera</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <select class="select-style" name="region">
                                <option value="">Select Region...</option>
                                <option value="East">East</option>
                                <option value="West">West</option>
                                <option value="North">North</option>
                                <option value="Center">Center</option>
                                <option value="South">South</option>
                                <option value="South-East">South-East</option>
                                <option value="South-West">South-West</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <select class="select-style" name="property-type">
                                <option value="">Type...</option>
                                <option value="6">Apartment</option>
                                <option value="7">Town House</option>
                                <option value="5">Villa</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-25">
                            <label class="label-text">Price</label>
                            <div id="price"></div>
                            <div class="d-flex align-items-center value">
                                <span id="price-value1"></span>
                                <span class="separator">—</span>
                                <span id="price-value2"></span>
                                <input type="hidden" name="min-value" value="" />
                                <input type="hidden" name="max-value" value="" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-25">
                            <label class="label-text">Bedrooms</label>
                            <div id="bedrooms"></div>
                            <div class="d-flex align-items-center value">
                                <span id="bedrooms-value1"></span>
                                <span class="separator">—</span>
                                <span id="bedrooms-value2"></span>
                                <input type="hidden" name="min-value" value="" />
                                <input type="hidden" name="max-value" value="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-11 col-12 text-right">
                    <a href="Javascript:void(0)" class="showmore-btn">Show More</a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="who-weare-area"
        style="background: url('{{asset('frontend/assets/images/bg/who.webp')}}') no-repeat center center / cover"
    >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 col-md-6">
                    <div class="who-weare-content">
                        <h2>WHO WE ARE</h2>
                        <h4>Much more than just real estate agents</h4>
                        <p>
                            At Key Consultants we provide you with a one-stop shop for all of your property and
                            business needs here on the island of Mallorca. Whether you are looking to buy or sell a
                            property, start a business or need help with non-resident taxes or inheritance matters,
                            our team at Key Consultants are here to help. Whatever your requirements, we will guide
                            and assist you through the whole process from start to finish, making the process as
                            easy as possible.
                        </p>
                        <a href="{{route('about.us')}}" class="btn-style">About Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 offset-lg-1 col-12">
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" placeholder="Name" name="name" id="name" />
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" placeholder="Email" name="email" id="email" />
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="tel" placeholder="Phone" name="phone" id="phone" />
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="text" placeholder="Subject" name="subject" id="subject" />
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Tell Us More"></textarea>
                            </div>
                            <div class="col-12 text-right">
                                <button class="submit" type="submit">
                                    Submit <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="find-area">
        <div class="container">
            <div class="find-content text-center">
                <h3 class="subsection-title"><i class="fa fa-mobile"></i> +34 665-892-175</h3>
                <h2 class="section-title">LET'S FIND IT TOGETHER!</h2>
                <p>
                    Can´t find what you are looking for on our website, then contact us with your search
                    requirements and let the team at key consultants find it for you. We work with a large network
                    of real estate and private individuals, so whatever style of property you are looking for, let
                    the team at Key Consultants find it for you.
                </p>
                <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
            </div>
        </div>
    </div>
    <div
        class="looling-for-area"
        style="background: url('{{asset('frontend/assets/images/bg/looking.jpg')}}') no-repeat center center fixed"
    >
        <div class="container">
            <h3 class="looking-for-sub text-center">We're Here To Help You</h3>
            <h2 class="section-title section-title-white mb-50">What Are You Looking For?</h2>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="looling-wrap text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/icons/building.png')}}" alt="" />
                        </div>
                        <a href="{{route('properties')}}" class="btn-style"> apartments </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="looling-wrap text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/icons/house.png')}}" alt="" />
                        </div>
                        <a href="{{route('properties')}}" class="btn-style"> houses </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="looling-wrap text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/assets/images/icons/building2.png')}}" alt="" />
                        </div>

                        <a href="{{route('properties')}}" class="btn-style"> businesses </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-50">MEET OUR TEAM!</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team-wrap">
                        <img class="image" src="{{asset('frontend/assets/images/team/img1.png')}}" alt="" />
                        <h3 class="name">SUSANNE DIETZE</h3>
                        <h4 class="designation">REAL ESTATE AGENT</h4>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="facebook.com"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="twitter.com"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="google.com"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                        <p>
                            Susanne is an experienced real estate Agent located in our Santa Ponsa office and who
                            has been assisting clients purchase and sell their homes for over many years. If you are
                            looking to buy and sell in the south west area, then you are in safe hands with Susanne.
                            Languages: Aleman, English & Spanish
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team-wrap">
                        <img class="image" src="{{asset('frontend/assets/images/team/img2.jpg')}}" alt="" />
                        <h3 class="name">ALEX CARVALHO</h3>
                        <h4 class="designation">GESTOR & PROPERTY SERVICES</h4>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="facebook.com"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="twitter.com"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="google.com"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                        <p>
                            Whether it is helping to solve problems, working with a first time buyer, or preparing a
                            will on behalf of a client, Alex prides himself on his unparalleled service with an
                            aptitude for problem solving – something essential for navigating clients through the
                            challenges facing them when starting a business here on Mallorca. My focus is always on
                            serving my clients with honesty, integrity and discretion as a dependable and
                            knowledgeable Agent committed to exceptional results. Alex is here as your Gestor for
                            whatever service you need.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team-wrap">
                        <img class="image" src="{{asset('frontend/assets/images/team/img3.jpg')}}" alt="" />
                        <h3 class="name">RICHARD MORAN</h3>
                            <h4 class="designation">GESTOR & PROPERTY SERVICES</h4>
                            <ul class="social">
                                <li>
                                    <a target="_blank" href="facebook.com"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="twitter.com"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="google.com"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="linkedin.com"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                            <p>
                                Richard English and has had an affinity with Mallorca from a very young age when his step father decided to move to Mallorca over 25 years ago. Having worked in the legal sector for over 20 years Richard has gained valuable experience into the the legal system understanding the complexities involved in the completion of property and business matters. Having owned a number of businesses here on Mallorca, Richard is also very experienced in:-<strong>
                                    Compliance matters,
                                    Accounts,
                                    IVA,
                                    Business Sales,
                                    Property Sales
                                </strong>

                                Richard speaks both English and Spanish.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        // Initialize slider:
        $(document).ready(function () {
            $('.noUi-handle').on('click', function () {
                $(this).width(50);
            });
            // price slider
            let priceSlider = document.getElementById('price');
            let moneyFormat = wNumb({
                decimals: 0,
                thousand: ',',
                prefix: '€',
            });
            noUiSlider.create(priceSlider, {
                start: [0, 10000],
                step: 1,
                range: {
                    min: [0],
                    max: [10000],
                },
                format: moneyFormat,
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            priceSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-value1').innerHTML = values[0];
                document.getElementById('price-value2').innerHTML = values[1];
                document.getElementsByName('min-value').value = moneyFormat.from(values[0]);
                document.getElementsByName('max-value').value = moneyFormat.from(values[1]);
            });

            // bedrooms slider
            let bedroomsSlider = document.getElementById('bedrooms');

            noUiSlider.create(bedroomsSlider, {
                start: [0, 7],
                step: 1,
                range: {
                    min: [0],
                    max: [7],
                },
                format: wNumb({
                    decimals: 0,
                    thousand: ',',
                }),
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            bedroomsSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('bedrooms-value1').innerHTML = values[0];
                document.getElementById('bedrooms-value2').innerHTML = values[1];
                document.getElementsByName('min-value').value;
                document.getElementsByName('max-value').value;
            });
        });
    </script>
@endpush
