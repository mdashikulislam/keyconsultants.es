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
                    <form id="sort-form" class="row" action="{{route('properties')}}" method="GET">
                        <div class="col-md-4 col-sm-6 col-12">
                            <select name="reference_number" class="select-style" name="reference_number">
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
                            <select class="select-style" name="property-type">
                                <option value="">Type...</option>
                                {!! \App\Helper\Helper::getPropertyTypeDropdown(request()->input('property-type')) !!}
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
                                <input type="hidden" id="bed1" name="min-value" value="" />
                                <input type="hidden" id="bed2" name="max-value" value="" />
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

    <div class="product-area pb-5">
        <div class="container">
            <select class="product-filter" name="select-name">
                <option value="">Sort By Price...</option>
                <option>Lowest to highest</option>
                <option>Highest to lowest</option>
            </select>
            <div class="row">
                @forelse($properties as $property)
                    <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">Rent/Sale</span>
                            <h4>{{$property->city}}</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
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
                                    {!!  \App\Helper\Helper::getFrontendPropertyTypeNameById($property->property_type)!!}
                                </h5>
                                <span class="price"><i class="fa fa-check"></i> {{$property->price}} </span>
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

            $('select').on('change',function (){
                $('#sort-form').submit();
            });
            bedroomsSlider.noUiSlider.on('change', function (values, handle) {
                document.getElementById('bedrooms-value1').innerHTML = values[0];
                document.getElementById('bedrooms-value2').innerHTML = values[1];
                document.getElementsByName('min-value').value;
                document.getElementsByName('max-value').value;
                $('#sort-form').submit();
            });
        });
    </script>
@endpush
