@extends('frontend.layouts.inner-master')
@section('content')
    <div
        class="sale-breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain"
    >
        <div class="container">
            <h2 class="sale-breadcumb-title">Search our Properties</h2>
        </div>
    </div>
    <div class="sale-rent-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="sort-form" action="{{route('properties')}}" method="GET">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <select  id="looking_for" class="select-style" name="looking_for">
                                    <option value="0" selected disabled>Looking For</option>
                                    <option {{request()->input('looking_for') == '7' ? 'selected':''}} value="7">Sale</option>
                                    <option {{request()->input('looking_for') == '6' ? 'selected':''}} value="6">Rent</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple id="reference_number" class="select-style" name="reference_number[]">
                                    <option value="">Reference Number...</option>
                                    {!! \App\Helper\Helper::getReferenceDropdown(request()->input('reference_number')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple class="select-style" id="property_type" name="property_type[]">
                                    <option value="">Type...</option>
                                    {!! \App\Helper\Helper::getPropertyTypeDropdown(request()->input('property_type')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple name="province[]" id="province" class="form-control">
                                    {!! \App\Helper\Helper::getPropertyProvince(request()->input('province')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple name="district[]" id="district" class="form-control">
                                    @forelse(\App\Models\Distict::all() as $district)
                                        <option
                                            @if(request()->input('district'))
                                                @foreach(request()->input('district') as $dt)
                                                @if($dt == $district->name)
                                                    selected
                                                @endif
                                                @endforeach
                                            @endif
                                            value="{{$district->name}}">{{$district->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple name="city[]" id="city" class="form-control">
                                    @forelse(\App\Models\City::all() as $city)
                                        <option
                                            @if(request()->input('city'))
                                                @foreach(request()->input('city') as $dt)
                                                    @if($dt == $city->name)
                                                    selected
                                                    @endif
                                                @endforeach
                                            @endif
                                            value="{{$city->name}}">{{$city->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select multiple name="feature[]" id="feature" class="form-control">
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
                            <div class="col-md-4 col-sm-6 col-12 mb-25">
                                <label class="label-text">Price</label>
                                <div id="price"></div>
                                <div class="d-flex align-items-center value">
                                    <span id="price-value1"></span>
                                    <span class="separator">—</span>
                                    <span id="price-value2"></span>
                                    <input type="hidden" name="min_price" />
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
                                    <input type="hidden" id="bed1" name="min_bed"  />
                                    <input type="hidden" id="bed2" name="max_bed" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="price_filter">
                                    <option value="">Sort By Price...</option>
                                    <option {{request()->input('price_filter') == 'ASC' ? 'selected':''}} value="ASC">Lowest to highest</option>
                                    <option {{request()->input('price_filter') == 'DESC' ? 'selected':''}} value="DESC">Highest to lowest</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-6 col-12"></div>
                            <div class="col-md-6 col-sm-6 col-12 text-right">
                                {{--                                <a href="Javascript:void(0)" id="show-hide" class="showmore-btn">Show More</a>--}}
                                <button style="background: #c0b298!important;border-color: #c0b298!important" class="btn btn-success" type="submit">Search</button>
                                <a href="{{route('properties')}}"  class="btn btn-dark">Clear Filter</a>
                                <button type="button" class="btn btn-danger" id="seeker">
                                    Save this search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="product-area pb-5">
        <div class="container">
            <div class="row">
                @forelse($properties as $property)
                    <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">{{$property->propertyStatus->name}}</span>
                            <h4>{{$property->city}}</h4>
{{--                            <span class="fevurite"><i class="fa fa-star"></i></span>--}}
                        </div>
                        <div class="product-img">
                            <img src="{{asset('storage/'.$property->feature_image)}}" alt="" />
                            <div class="img-content">
                                <h3>{{$property->title}}</h3>
                                <a href="{{route('properties.details',['id'=>$property->id,'slug'=>$property->slug])}}" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>{{$property->reference_number}}</h5>
                                <ul class="d-flex justify-content-between">
                                    @if($property->living_space)
                                    <li><i class="fa fa-linode"></i> {{$property->living_space}}</li>
                                    @endif
                                    <li><i class="fa fa-bed"></i> {{$property->room}}</li>
                                    <li><i class="fa fa-bath"></i> {{$property->bathroom}}</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>
                                    @forelse( \App\Helper\Helper::getFrontendPropertyTypeNameById($property->property_type) as $type)
                                        {!! $type.'<br>'  !!}
                                    @empty
                                    @endforelse
                                </h5>
                                <span class="price"><i class="fa fa-check"></i> {{$property->symbol.number_format($property->price)}} </span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
                <div class="col-12">
                    {{$properties->appends(request()->input())->links('vendor.pagination.bootstrap-4')}}
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
{{--    @include('frontend.property-seeker')--}}
@endsection
@push('js')
    <script>
        $(document).on('click', '.fevurite', function () {
            $(this).find('.fa').addClass('fa-star-o').removeClass('fa-star');
        });
    </script>
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
        function select2Control(){
            $("#reference_number").select2({
                closeOnSelect : false,
                allowHtml: true,
                allowClear: false,
                tags: false,
                placeholder:'Reference Number'
            });
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
                placeholder:'City'
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

        }

        select2Control();

        $('#looking_for').select2({
            closeOnSelect : false,
            allowHtml: true,
            allowClear: false,
            tags: false,
            placeholder:'Looking For'
        });

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
        // Initialize slider:
        $(document).ready(function () {
            $('.noUi-handle').on('click', function () {
                $(this).width(50);
            });

            // $('select').on('change',function (){
            //     $('#sort-form').submit();
            // });

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

            noUiSlider.create(priceSlider, {
                start: [{{request()->input('min_price') ? :0}}, {{request()->input('max_price')? : 1000000}}],
                step: 1,
                range: {
                    min: [0],
                    max: [1000000],
                },
                format: wNumb({
                    decimals: 0,
                }),
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            priceSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-value1').innerHTML = numberWithCommas(values[0]);
                document.getElementById('price-value2').innerHTML = numberWithCommas(values[1]);
                $('input[name="min_price"]').val(values[0]);
                $('input[name="max_price"]').val(values[1]);
            });


            priceSlider.noUiSlider.on('change', function (values, handle) {
                document.getElementById('price-value1').innerHTML = numberWithCommas(values[0]);
                document.getElementById('price-value2').innerHTML = numberWithCommas(values[1]);
                $('input[name="min_price"]').val(values[0]);
                $('input[name="max_price"]').val(values[1]);
                // $('#sort-form').submit();
            });




            // bedrooms slider
            let bedroomsSlider = document.getElementById('bedrooms');

            noUiSlider.create(bedroomsSlider, {
                start: [{{request()->input('min_bed') ? :0}}, {{request()->input('max_bed')? : 7}}],
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


            bedroomsSlider.noUiSlider.on('change', function (values, handle) {
                document.getElementById('bedrooms-value1').innerHTML = values[0];
                document.getElementById('bedrooms-value2').innerHTML = values[1];
                $('input[name="min_bed"]').val(values[0]);
                $('input[name="max_bed"]').val(values[1]);
                // $('#sort-form').submit();
            });

            // bedrooms slider
            let livingSpaceSlider = document.getElementById('living_space');

            noUiSlider.create(livingSpaceSlider, {
                start: [{{request()->input('min_space') ? :0}}, {{request()->input('max_space')? : 1000}}],
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


            livingSpaceSlider.noUiSlider.on('change', function (values, handle) {
                document.getElementById('space-value1').innerHTML = values[0];
                document.getElementById('space-value2').innerHTML = values[1];
                $('input[name="min_space"]').val(values[0]);
                $('input[name="max_space"]').val(values[1]);
                // $('#sort-form').submit();
            });

        });
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
@endpush
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
