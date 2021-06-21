@extends('frontend.layouts.inner-master')
@section('content')
    <div
        class="sale-breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain"
    >
        <div class="container">
            <h2 class="sale-breadcumb-title">Properties</h2>
        </div>
    </div>
    <div class="sale-rent-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <form id="sort-form" action="{{route('properties')}}" method="GET">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12">
                                <select  class="select-style" name="reference_number">
                                    <option value="">Reference Number...</option>
                                    {!! \App\Helper\Helper::getReferenceDropdown(request()->input('reference_number')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select  class="select-style" name="city">
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
                                    {!! \App\Helper\Helper::getRegionFrontendDropdown(request()->input('region')) !!}
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <select class="select-style" name="property_type">
                                    <option value="">Type...</option>
                                    {!! \App\Helper\Helper::getPropertyTypeDropdown(request()->input('property_type')) !!}
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
                            <div class="col-lg-11 col-12 text-right">
                                <a href="Javascript:void(0)" id="show-hide" class="showmore-btn">Show More</a>
                                <a href="{{route('properties')}}" class="showmore-btn">Reset Filter</a>
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
                        <select class="product-filter" name="price_filter">
                            <option value="">Sort By Price...</option>
                            <option {{request()->input('price_filter') == 'ASC' ? 'selected':''}} value="ASC">Lowest to highest</option>
                            <option {{request()->input('price_filter') == 'DESC' ? 'selected':''}} value="DESC">Highest to lowest</option>
                        </select>
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
{{--                <div class="col-12">--}}
{{--                    <button class="loadmore-btn">Load more</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).on('click', '.fevurite', function () {
            $(this).find('.fa').addClass('fa-star-o').removeClass('fa-star');
        });
    </script>
    <script>
        // Initialize slider:
        $(document).ready(function () {
            $('.noUi-handle').on('click', function () {
                $(this).width(50);
            });

            $('select').on('change',function (){
                $('#sort-form').submit();
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

            noUiSlider.create(priceSlider, {
                start: [{{request()->input('min_price') ? :0}}, {{request()->input('max_price')? : 100000}}],
                step: 1,
                range: {
                    min: [0],
                    max: [100000],
                },
                format: wNumb({
                    decimals: 0,
                    thousand: ',',
                }),
                connect: true,
            });

            // Set visual min and max values and also update value hidden form inputs
            priceSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-value1').innerHTML = values[0];
                document.getElementById('price-value2').innerHTML = values[1];
                $('input[name="min_price"]').val(parseInt(values[0].replace(/\,(\d\d)$/, ".$1").replace(',','')));
                $('input[name="max_price"]').val(parseInt(values[1].replace(/\,(\d\d)$/, ".$1").replace(',','')));
            });


            priceSlider.noUiSlider.on('change', function (values, handle) {
                document.getElementById('price-value1').innerHTML = values[0];
                document.getElementById('price-value2').innerHTML = values[1];
                $('input[name="min_price"]').val(parseInt(values[0].replace(/\,(\d\d)$/, ".$1").replace(',','')));
                $('input[name="max_price"]').val(parseInt(values[1].replace(/\,(\d\d)$/, ".$1").replace(',','')));
                $('#sort-form').submit();
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
                $('#sort-form').submit();
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
                $('#sort-form').submit();
            });

        });
    </script>
@endpush
