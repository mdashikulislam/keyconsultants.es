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

    <div class="product-area pb-5">
        <div class="container">
            <select class="product-filter" name="select-name">
                <option value="">Sort By Price...</option>
                <option>Lowest to highest</option>
                <option>Highest to lowest</option>
            </select>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">Rent/Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">For Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">For Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">For Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">For Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product-wrap">
                        <div class="product-header">
                            <span class="badge">For Sale</span>
                            <h4>Port Andratx</h4>
                            <span class="fevurite"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/images/product/img1.jpeg" alt="" />
                            <div class="img-content">
                                <h3>Amazing 3 bedroom Villa in Sant Elm</h3>
                                <a href="product-details.html" class="more">More</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex flex-wrap justify-content-between info">
                                <h5>KC30070</h5>
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-linode"></i> 172</li>
                                    <li><i class="fa fa-bed"></i> 5</li>
                                    <li><i class="fa fa-bath"></i> 2</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <h5>KC30070</h5>
                                <span class="price"><i class="fa fa-check"></i> 1490000 €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="loadmore-btn">Load more</button>
                </div>
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
        });
    </script>
@endpush
