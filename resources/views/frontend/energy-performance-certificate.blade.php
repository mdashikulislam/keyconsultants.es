@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    CERTIFICADO DE EFICIENCIA ENERGÉTICO
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <h2 style="color: #c0b298;" class="mb-3">Energy Performance Certificate : </h2>
                        <div class="img text-center">
                            <img src="{{asset('frontend/assets/images/energy.png')}}" alt="">
                        </div>
                        <p>The energy performance certificate (certificado de efficienca Energética) is now mandatory if you intend to sell or rent your Spanish Property. If you are planning on selling your property, the notary will not complete the transaction without it.  </p>
                        <p>The energy performance certificate, measures the efficiency of your home together with a measurement of your Co2 emissions.</p>
                        <p>If you need an energy performance certificate and are based on the island of Malllorca, please contact us.</p>

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Up to 85m2</th>
                                    <th>Between 85m2 & 200m2</th>
                                    <th>Between 200m2 & 400m2</th>
                                    <th>Between 400m2 & 600m2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Apartment/house</td>
                                    <td>185€</td>
                                    <td>195€</td>
                                    <td>235€</td>
                                    <td>255€</td>
                                </tr>
                                <tr>
                                    <td>Chalet / Villa</td>
                                    <td>195€</td>
                                    <td>215€</td>
                                    <td>255€</td>
                                    <td>295€</td>
                                </tr>
                                <tr>
                                    <td>Shops/Locales</td>
                                    <td>190€</td>
                                    <td>210€</td>
                                    <td>240€</td>
                                    <td>290€</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="callto-action-area"
        style="background: url('{{asset('frontend/assets/images/bg/cta.webp')}}') no-repeat center center fixed"
    >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2>WORKING TOGETHER TO ENSURE YOUR PROPERTY SALE RUNS SMOOTHLY</h2>
                    <p>
                        As apart of our service, we will always ensure that we provide you with transparency of
                        service, ensuring that you receive the best, guaranteed cost effective and quality assured
                        service possible.
                    </p>
                    <div class="devaidar"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
