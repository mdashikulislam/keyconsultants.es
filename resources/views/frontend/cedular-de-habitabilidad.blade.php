@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    CEDULAR DE HABITABILIDAD
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <div class="content">
                            <h1 style="color: #c0b298;text-align: center">Certificate of Habitability</h1>
                            <img class="mt-3" src="{{asset('frontend/assets/images/cer.jpg')}}" alt="">
                            <div class="text mt-5">
                                <p>The certificate of habitability is an <strong>administrative document</strong>  that confirms that the home you are purchasing or selling conforms meets basic living conditions, without prejudice to other duly authorized activities being carried out there.</p>
                                <p><strong>The conditions</strong> that your home has to meet, this will depend on the autonomous community where your house located and the year of construction. But the <strong>specific data that are measured</strong> are the minimum useful and usable surface of the property and of the different rooms, their sizes and heights, the windows and ventilation. The certificate is to ensure that rooms in the property meet basic living conditions and are fit for purposes. The certificate will also state the maximum occupancy as well as the health of the property.</p>
                                <p>There are a 3 types of Certificates available:</p>
                                <ul>
                                    <li><strong>1.	Certificate of first occupation</strong> - For new Build Properties</li>
                                    <li><strong>2.	Second Occupation Certificate</strong> - For second hand homes</li>
                                    <li><strong>3.	Rehabilitation Certificate</strong> - for when the property has undertaken a major reform.</li>
                                </ul>
                                <p>Why do I need a certificate of Habitabilidad? – Having a valid certificate of habitability allows you to legally rent or sell your property or obtain a mortgage on your property, obtain utilities such as gas, electric and water</p>
                                <p>A technical architect will need to attend at the property and take measurements of each room in the property. Once and will request a certificate from the council or appointed organisation registered to provide certifies, which in Mallorca is the Conselleria de Mallorca.</p>
                                <p>The Cost of a certificate is dependant on the size and type of property - <span style="text-decoration: underline">please be aware that this service is only available to clients on the island of Mallorca.</span></p>

                                <h3>Prices</h3>
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <td>House / apartment</td>
                                        <td>160€  Plus IVA</td>
                                        <td>13.00€ taxes</td>
                                    </tr>
                                    <tr>
                                        <td>Shops / offices</td>
                                        <td>170€  Plus IVA</td>
                                        <td>13.00€ taxes</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
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
