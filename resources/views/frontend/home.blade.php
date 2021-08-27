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
{{--                <li><button style="padding: 13px 15px;color: #000;font-size: 18px;text-transform: uppercase;font-family: 'Poppins';font-weight: 500" id="seeker" class="btn" type="button" >search our Properties</button></li>--}}
            </ul>
            <div class="row">
                <div class="col-lg-12">
                    <form id="search" method="GET" action="{{route('properties')}}">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 mb-15">
                                <select  style="width:100%!important;" id="looking_for" class="select-style" name="looking_for">
                                    <option {{request()->input('looking_for') == '7' ? 'selected':''}} value="7">Sale</option>
                                    <option {{request()->input('looking_for') == '6' ? 'selected':''}} value="6">Rent</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple id="reference_number" class="select-style form select-js" name="reference_number[]">
                                    {!! \App\Helper\Helper::getReferenceDropdown(request()->input('reference_number')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple class="select-style" id="property_type" name="property_type[]">
                                    <option value="">Type...</option>
                                    {!! \App\Helper\Helper::getPropertyTypeDropdown(request()->input('property_type')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple name="province[]" id="province" class="form-control">
                                    {!! \App\Helper\Helper::getPropertyProvince() !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple name="district[]" id="district" class="form-control">
                                    {!! \App\Helper\Helper::getPropertyDistrict(request()->input('district')) !!}
                                </select>
                            </div>
                            <div  class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple name="city[]" id="city" class="form-control">
                                    {!! \App\Helper\Helper::getPropertyCityDropdown(request()->input('city')) !!}
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                <select style="width:100%!important;" multiple name="feature[]" id="feature" class="form-control">
                                    @forelse(\App\Models\Feature::all() as $feature)
                                        <option
                                            @if(request()->input('feature'))
                                            @foreach(request()->input('feature') as $ft)
                                            @if($ft == $feature->id)
                                            selected
                                            @endif
                                            @endforeach
                                            @endif
                                            value="{{$feature->id}}">{{$feature->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12  mb-25">
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
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12  mb-25">
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
                            <div class="col-md-6 col-sm-6 "></div>
                            <div class="col-md-6  col-sm-12  text-right">
                                {{--                                <a href="Javascript:void(0)" id="show-hide" class="showmore-btn">Show More</a>--}}
                                <button style="background: #c0b298!important;border-color: #c0b298!important" class="btn btn-success btn-sm" type="submit">Search</button>
                                <a href="{{route('landing')}}"  class="btn btn-dark btn-sm">Clear Filter</a>
                                <button type="button" class="btn btn-danger btn-sm" id="seeker">
                                    Save this search
                                </button>
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


    <!-- Modal -->
    <div class="modal fade" id="property_seeker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Property Seeker</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('property.seeker')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="mod_ref_number">
                        <input type="hidden" name="mod_province">
                        <input type="hidden" name="mod_district">
                        <input type="hidden" name="mod_city">
                        <input type="hidden" name="mod_type">
                        <input type="hidden" name="mod_min_price">
                        <input type="hidden" name="mod_max_price">
                        <input type="hidden" name="mod_min_bedroom">
                        <input type="hidden" name="mod_max_bedroom">
                        <input type="hidden" name="mod_feature">
                        <input type="hidden" name="mod_for">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <style>
        .select2-results__option {
            padding-right: 20px;
            vertical-align: middle;
        }
        .select2-results__option:before {
            content: "";
            display: inline-block;
            position: relative;
            height: 20px;
            width: 20px;
            border: 2px solid #e9e9e9;
            border-radius: 4px;
            background-color: #fff;
            margin-right: 20px;
            vertical-align: middle;
        }
        .select2-results__option[aria-selected=true]:before {
            font-family:fontAwesome;
            content: "\f00c";
            color: #fff;
            background-color: #c0b298;
            border: 0;
            display: inline-block;
            padding-left: 3px;
        }
        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #fff;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #eaeaeb;
            color: #272727;
        }
        .select2-container--default .select2-selection--multiple {
            margin-bottom: 10px;
        }
        .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
            border-radius: 4px;
        }
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #c0b298;
            border-width: 2px;
        }
        .select2-container--default .select2-selection--multiple {
            border-width: 2px;
        }
        .select2-container--open .select2-dropdown--below {

            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);

        }
        .select2-selection .select2-selection--multiple:after {
            content: 'hhghgh';
        }
        /* select with icons badges single*/
        .select-icon .select2-selection__placeholder .badge {
            display: none;
        }
        .select-icon .placeholder {
            display: none;
        }
        .select-icon .select2-results__option:before,
        .select-icon .select2-results__option[aria-selected=true]:before {
            display: none !important;
            /* content: "" !important; */
        }
        .select-icon  .select2-search--dropdown {
            display: none;
        }
        .select-icon  .select2-search--dropdown {
            display: none;
        }
        .select2-container .select2-selection--single{
            height: 40px!important;
        }
        .select2-selection__arrow {
            height: 38px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 38px;
            font-weight: 500;
        }
    </style>
@endpush
@push('js')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>--}}
    <script>
        $('#seeker').on('click',function (){
            $('input[name="mod_ref_number"]').val($('#reference_number').val())
            $('input[name="mod_province"]').val($('#province').val())
            $('input[name="mod_district"]').val($('#district').val())
            $('input[name="mod_city"]').val($('#city').val())
            $('input[name="mod_type"]').val($('#property_type').val())
            $('input[name="mod_min_price"]').val($('input[name="min_price"]').val())
            $('input[name="mod_max_price"]').val($('input[name="max_price"]').val())
            $('input[name="mod_min_bedroom"]').val($('input[name="min_bed"]').val())
            $('input[name="mod_max_bedroom"]').val($('input[name="max_bed"]').val())
            $('input[name="mod_for"]').val($('#looking_for').val())
            $('input[name="mod_feature"]').val($('#feature').val())
            $('#property_seeker').modal('show');
        })

        $("#reference_number").select2({
            closeOnSelect : false,
            allowHtml: true,
            allowClear: false,
            tags: false,
            placeholder:'Reference Number'
        });
        $('#property_type').select2({
            closeOnSelect : false,
            allowHtml: true,
            allowClear: false,
            tags: false,
            placeholder:'Type'
        });
        $('#feature').select2({
            closeOnSelect : false,
            allowHtml: true,
            allowClear: false,
            tags: false,
            placeholder:'Feature'
        });
        $('#looking_for').select2({
            closeOnSelect : false,
            allowHtml: true,
            allowClear: false,
            tags: false,
            placeholder:'Looking For'
        });
        function select2Control(){

            $("#province").select2({
                closeOnSelect : false,
                allowHtml: true,
                allowClear: false,
                tags: false,
                placeholder:'Province'
            });
            $("#district").select2({
                closeOnSelect : false,
                allowHtml: true,
                allowClear: false,
                tags: false,
                placeholder:'District'
            });
            $("#city").select2({
                closeOnSelect : false,
                allowHtml: true,
                allowClear: false,
                tags: false,
                placeholder:'Area'
            });

        }
        select2Control();

        $('#province,#district,#city').on('change',function (){
            var province = $('#province');
            var district = $('#district');
            var city = $('#city');
            var data = {
                'province':province.val(),
                'district':district.val(),
                'city':city.val(),
                '_token':'{{csrf_token()}}'
            };
            $.ajax({
                url:'{{route('get.all')}}',
                method:'POST',
                data:data,
                success:function (response){
                    district.empty();
                    district.html(response.district);
                    city.empty();
                    city.html(response.city);
                    select2Control();
                }
            });
        });

        console.log($(".select-js").data('place'))
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
                start: [0, 9999999],
                step: 1,
                range: {
                    min: [0],
                    max: [9999999],
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
