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
                <li><a class="sale" href="">Sale</a></li>
                <li><a class="rent" href="">Rent</a></li>
            </ul>
            <div class="row">
                <div class="col-lg-9">
                    <form id="search">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="reference_number">
                                    <option selected value="">Reference Number...</option>
                                    {!! \App\Helper\Helper::getReferenceDropdown(request()->input('reference_number')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="city">
                                    <option value="">Select City...</option>
                                    <option {{request()->input('city') == 'Alcudia' ? 'selected':''}} value="Alcudia">Alcudia</option>
                                    <option {{request()->input('city') == 'Binssalem' ? 'selected':''}} value="Binssalem">Binssalem</option>
                                    <option {{request()->input('city') == 'Cala Ratjada' ? 'selected':''}} value="Cala Ratjada">Cala Ratjada</option>
                                    <option {{request()->input('city') == "Cala d'Or" ? 'selected':''}} value="Cala d'Or">Cala d'Or</option>
                                    <option {{request()->input('city') == 'Cala Moraia' ? 'selected':''}} value="Cala Moraia">Cala Moraia</option>
                                    <option {{request()->input('city') == 'Cala Millor' ? 'selected':''}} value="Cala Millor">Cala Millor</option>
                                    <option {{request()->input('city') == 'Calvià Pueblo' ? 'selected':''}} value="Calvià Pueblo">Calvià Pueblo</option>
                                    <option {{request()->input('city') == 'Costa de la Calma' ? 'selected':''}} value="Costa de la Calma">Costa de la Calma</option>
                                    <option {{request()->input('city') == 'Deià' ? 'selected':''}} value="Deià">Deià</option>
                                    <option {{request()->input('city') == 'Esporles' ? 'selected':''}} value="Esporles">Esporles</option>
                                    <option {{request()->input('city') == 'Fornalutx' ? 'selected':''}} value="Fornalutx">Fornalutx</option>
                                    <option {{request()->input('city') == 'Inca' ? 'selected':''}} value="Inca">Inca</option>
                                    <option {{request()->input('city') == 'Manacor' ? 'selected':''}} value="Manacor">Manacor</option>
                                    <option {{request()->input('city') == 'Palma de Mallorca' ? 'selected':''}} value="Palma de Mallorca">Palma de Mallorca</option>
                                    <option {{request()->input('city') == 'Pollença' ? 'selected':''}} value="Pollença">Pollença</option>
                                    <option {{request()->input('city') == 'Puerto Pollensa' ? 'selected':''}} value="Puerto Pollensa">Puerto Pollensa</option>
                                    <option {{request()->input('city') == 'Sa Pobla' ? 'selected':''}} value="Sa Pobla">Sa Pobla</option>
                                    <option {{request()->input('city') == 'Santa Ponça' ? 'selected':''}} value="Santa Ponça">Santa Ponsa</option>
                                    <option {{request()->input('city') == 'S´Arraco' ? 'selected':''}} value="S´Arraco">S'Arraco</option>
                                    <option {{request()->input('city') == 'Sineu' ? 'selected':''}} value="Sineu">Sineu</option>
                                    <option {{request()->input('city') == 'Sóller' ? 'selected':''}} value="Sóller">Sóller</option>
                                    <option {{request()->input('city') == 'Valldemossa' ? 'selected':''}} value="Valldemossa">Valldemossa</option>
                                    <option {{request()->input('city') == 'Port Andratx' ? 'selected':''}} value="Port Andratx">Port Andratx </option>
                                    <option {{request()->input('city') == 'El Toro' ? 'selected':''}} value="El Toro">El Toro</option>
                                    <option {{request()->input('city') == 'Son Ferrer' ? 'selected':''}} value="Son Ferrer">Son Ferrer</option>
                                    <option {{request()->input('city') == 'Paguera' ? 'selected':''}} value="Paguera">Paguera</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="region">
                                    <option value="">Select Region...</option>
                                    {!! \App\Helper\Helper::getRegionFrontendDropdown() !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="property_type">
                                    <option value="">Type...</option>
                                    {!! \App\Helper\Helper::getPropertyTypeDropdown() !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 mb-25">
                                <label class="label-text">Price</label>
                                <div id="price"></div>
                                <div class="d-flex align-items-center value">
                                    <span id="price-value1"></span>
                                    <span class="separator">—</span>
                                    <span id="price-value2"></span>
                                    <input type="hidden" name="min_price"  />
                                    <input type="hidden" name="max_price"  />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 mb-25">
                                <label class="label-text">Bedrooms</label>
                                <div id="bedrooms"></div>
                                <div class="d-flex align-items-center value">
                                    <span id="bedrooms-value1"></span>
                                    <span class="separator">—</span>
                                    <span id="bedrooms-value2"></span>
                                    <input type="hidden" name="min_bed" />
                                    <input type="hidden" name="max_bed" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 col-12 text-right">
                                <a href="Javascript:void(0)" id="show-hide" class="showmore-btn">Show More</a>
                            </div>
                        </div>
                        <div class="row" id="space_show">
{{--                            <div class="col-md-4 col-sm-6 col-12 mb-25">--}}
{{--                                <label class="label-text">Living Space</label>--}}
{{--                                <div id="living_space"></div>--}}
{{--                                <div class="d-flex align-items-center value">--}}
{{--                                    <span id="space-value1"></span>--}}
{{--                                    <span class="separator">—</span>--}}
{{--                                    <span id="space-value2"></span>--}}
{{--                                    <input type="hidden" name="min_space" />--}}
{{--                                    <input type="hidden" name="max_space"  />--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-md-4 col-sm-6 col-12">
                                <select name="additionally" class="select-style">
                                    <option value="">Additionally...</option>
                                    {!! \App\Helper\Helper::getAdditionallyDropdown(request()->input('additionally')) !!}
                                </select>
                            </div>
                        </div>
                    </form>
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
                    <form class="contact-form" action="{{route('user.contact.form')}}" method="POST">
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

            var saleRoute = '{{route('property.sale')}}';
            var rentRoute = '{{route('property.rent')}}';

            $('.sale').on('click',function (event){
                event.preventDefault();
                $('#search').attr('action',saleRoute);
                $('#search').submit();
            });
            $('.rent').on('click',function (event){
                event.preventDefault();
                $('#search').attr('action',rentRoute);
                $('#search').submit();
            });
            $('#space_show').hide();
            $('#show-hide').on('click',function (){
                $('#space_show').slideToggle();
                $(this).toggleClass('active');
                if ($(this).hasClass('active')){
                    $(this).text('Hide');
                }else {
                    $(this).text('Show more');
                }
            });


            // price slider
            let priceSlider = document.getElementById('price');
            let moneyFormat = wNumb({
                decimals: 0,
            });
            noUiSlider.create(priceSlider, {
                start: [0, 1000000],
                step: 1,
                range: {
                    min: [0],
                    max: [1000000],
                },
                format: moneyFormat,
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            priceSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-value1').innerHTML = numberWithCommas(values[0]);
                document.getElementById('price-value2').innerHTML = numberWithCommas(values[1]);
                $('input[name="min_price"]').val(values[0]);
                $('input[name="max_price"]').val(values[1]);

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
                $('input[name="min_bed"]').val(values[0]);
                $('input[name="max_bed"]').val(values[1]);
            });


            let livingSpaceSlider = document.getElementById('living_space');

            noUiSlider.create(livingSpaceSlider, {
                start: [0, 1000],
                step: 1,
                range: {
                    min: [0],
                    max: [1000],
                },
                format: wNumb({
                    decimals: 0,
                }),
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            livingSpaceSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('space-value1').innerHTML = values[0];
                document.getElementById('space-value2').innerHTML = values[1];
                $('input[name="min_space"]').val(values[0]);
                $('input[name="max_space"]').val(values[1]);
            });
        });
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
@endpush
