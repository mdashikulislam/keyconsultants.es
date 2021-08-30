@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    NON-RESIDENT TAXES
@endsection
@section('content')

    <div class="content-area" style="padding-bottom: 80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="module">
                       <div class="txt">
                           <h1 class="text-center mb-4">Non-Resident Taxes  -  (Modelo 210)</h1>
                           <p >Non-resident taxes arise when you are not a resident in Spain, but you own a property here for vacation purposes or to make an income renting out your property.  We have split these sections in 3 parts dealing with the typical holiday home first. </p>
                           <h5 class="text-center" style="color: #DB6503">Let Key Consultants Prepare and submit your Non-Resident Tax return for just 35,00€  plus IVA Per Person  — it only takes a few Minutes and can save you much time!</h5>
                       </div>
                        <div class="media-panel mt-5">
                            <h2>Non-Resident taxes – Holiday Homes</h2>
                            <p style="overflow:hidden;margin-top: 20px;text-align: justify"><img style="width: 35%;height: auto;float: left" class="align-self-center mr-3" src="{{asset('frontend/assets/images/tax.jpg')}}" alt="Generic placeholder image">If you own a property in Spain, but are not resident in Spain, your property is deemed to be available for letting purposes and available for you to make money. As such, even though you have no intention of letting your property, you are taxed a nominal value that is based on the Cadastral value of the property.  Every property in Spain has a cadastral reference and value, which is calculated by the Spanish Government based on a specific calculation.  You can find the cadastral reference on you IBI (Rates) Receipts issued yearly by the local authority.</p>
                        </div>
                        <div class="payment-text mt-5">
                            <h2>Payment of Non-Resident Taxes</h2>
                            <p>As a non-resident, you are obliged to present a yearly non-resident tax declaration in December (or in June of you own 2 or more properties,  including garages,  parking spaces and storage rooms etc.) for the previous year.  If you purchased your property part way through the year, the tax is apportioned and calculated according to the number of days you owned the property. The tax is always calculated 1 year in Arrears, so the tax for 2020 will not be due to be paid until December 2021 (or June 2021 if you own more than 1 property). </p>
                            <p>If the property is owned by multiple people, each person will need to submit a non-resident tax return in proportion to the percentage of the amount of ownership they have acquired. </p>
                        </div>
                        <div class="help mt-3">
                            <h2>How Key Consultants can help</h2>
                            <p>Key Consultants can help you submit your tax return on your behalf.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="" id="calculator">
                        <div class="calculator">
                            <h4>Calculate your non-resident taxes</h4>
                            <div class="models">
                                <p class="cal-text">NON RESIDENT TAX CALCULATOR</p>
                                <div class="form-group group-sec">
                                    <label for="">Please enter the catastral Value if your Property</label>
                                    <input id="amount" name="amount" type="number" class="form-control">
                                </div>
                                <div class="form-group radio-b text-center">
                                    <p>Has the catastral Value been revised in the last 10 years</p>
                                    <input value="YES" checked  type="radio" id="test3" name="year">
                                    <label for="test3">YES</label>
                                    <input value="NO" type="radio" id="test4" name="year">
                                    <label for="test4">NO</label>
                                </div>
                                <div class="form-group radio-b text-center">
                                    <p>Are you a resident in a country within the Europe Union?</p>
                                    <input value="YES" checked type="radio" id="test" name="country">
                                    <label for="test">YES</label>
                                    <input value="NO" type="radio" id="test2" name="country">
                                    <label for="test2">NO</label>
                                </div>
                                <div class="text-center">
                                    <p style="font-weight: bold">TOTAL TAX TO PAY</p>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="font-weight:bold;" id="basic-addon1">€</span>
                                    </div>
                                    <input id="total" type="text" disabled class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success">Calculate</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text text-center">
                        <a href="" style="display:block;color: #fff;font-weight: bold;background: #c0b298;padding: 30px;margin-top: 50px;font-size: 20px;word-break: break-all;border-radius: 4px">Click here to start your online Tax Return here</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-home" style="color: #3b5998"></i>
                        </div>
                        <div class="heading">
                            <h2 style="color: #3b5998">1. Complete our online form</h2>
                            <p>Complete our online tax form on our website in less than 5 minutes and pay our fee online</p>
                            <p>If you have any questions we will guide you through the process by phone, by chat or by e-mail.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-file" style="color: #55acee"></i>
                        </div>
                        <div class="heading">
                            <h2 style="color: #55acee">2. We prepare and submit your taxes on your behalf</h2>
                            <p>We calculate your tax to ensure that the information is correct and submit your tax return to the Spanish tax authority.</p>
                            <p>The tax payment will be set on direct debit and you do not have to go to the bank.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-check" style="color: #18a500"></i>
                        </div>
                        <div class="heading">
                            <h2 style="color: #18a500">3. You are done and receive a confirmation</h2>
                            <p>You will receive confirmation from us and the tax will be collected by the Spanish tax authority from your Spanish bank account via direct debit.</p>
                            <p>That´s it, your done!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="com-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="text">
                        <a href="" style="display:inline-block;color: #fff;font-weight: bold;background: #c0b298;padding: 30px;margin-top: 50px;font-size: 20px;word-break: break-all;border-radius: 4px">Click here to start your online Tax Return here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-area" style="padding: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <div class="faq">
                            <h2>Frequently Asked Questions</h2>
                            <h3 class="mt-3"><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>How are non-resident taxes calculated?</h3>
                            <ul style="list-style-type:square;margin-left: 15px;" class="mt-3">
                                <li>This depends on whether you are tax resident in another EU Country and whether the Valor Cadastral has been reviewed in the last 10 years.</li>
                                <li>If your valor cadastral HAS been reviewed in the last 10 years, your tax will be calculated on the following basis:-</li>
                                <li>Valor Catastral x 1.1% x 19% (19% only applies if you are tax resident in another EU country, if you are not resident in another EU country (such as the UK for example) the amount will be x 24%.</li>
                                <li>So, for example, if your valor catastral value is: 100.000€ and your valor cadastral value has been reviewed in the last 5 years, the following taxes would be paid.</li>
                            </ul>
                        </div>
                        <div class="tax">
                            <h3 class="mt-3"><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>Where a revision has taken place in the last 10 years </h3>
                            <ul style="list-style-type: disc;margin-left: 15px;" >
                                <li>100.000€ x 1.1% x 19% = 209€ (for EU Tax Residents) </li>
                                <li>100.000€ x 1.1% x 24% = 264€ (for NON-EU Tax residents)</li>
                            </ul>
                        </div>
                        <div class="tax">
                            <h3 class="mt-3"><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>Where NO revision has taken place within 10 years </h3>
                            <ul style="list-style-type: disc;margin-left: 15px;">
                                <li>100.000€ x 2% x 19%  = 380.00  (for EU Tax Residents) </li>
                                <li>100.000€ x 2% x 24%  = 480.00  (For NON-EU Tax residents) </li>
                            </ul>
                        </div>
                        <div class="link mt-2">
                            <p class="mb-2">You can check to see if your valor cadastral has been revised in the last 10 years by clicking on this link here:
                            <a style="word-break: break-all;display: block" target="_blank" href="https://www.agenciatributaria.es/AEAT.internet/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2020/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2010_2020/7_3_4__Municipios_con_valor_catastral_revisado_2010_2020.html">https://www.agenciatributaria.es/AEAT.internet/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2020/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2010_2020/7_3_4__Municipios_con_valor_catastral_revisado_2010_2020.html</a></p>
                        </div>
                        <div class="text pb-50">
                            <h3><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>How do I know if my Valor catasral has been reviewed in the last 10 years?</h3>
                            <p>List here is of Catastral revisions before 10 years:</p>
                            <a href="https://www.agenciatributaria.es/AEAT.internet/va_es/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2019/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019/7_3_4_7__Baleares/7_3_4_7__Baleares.html" style="word-break: break-all;display: block">https://www.agenciatributaria.es/AEAT.internet/va_es/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2019/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019/7_3_4_7__Baleares/7_3_4_7__Baleares.html</a>
                            <a class="mt-2" style="word-break: break-all;display: block"  href="https://www.agenciatributaria.es/AEAT.internet/va_es/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2019/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019.html">https://www.agenciatributaria.es/AEAT.internet/va_es/Inicio/Ayuda/Manuales__Folletos_y_Videos/Manuales_de_ayuda_a_la_presentacion/Ejercicio_2019/_Ayuda_Modelo_100/7__Cumplimentacion_IRPF__I_/7_3__Rendimientos_derivados_de_inmuebles/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019/7_3_4__Municipios_con_valor_catastral_revisado_2009_2019.html</a>
                            <p class="mt-2">note that if your valor catastral has not been revised in the last 10 years, the amount of tax imputation tax will be 2%</p>
                            <h3><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>I pay through my bank and do not have the Valor Cadastral details. </h3>
                            <p>If you pay your IBI and basura via direct debit and have not received a copy of your bill with the valor catastral,, there are a number of ways that you can obtain this information. </p>
                            <ul>
                                <li> 1)	You can obtain that information from the bank payment slip from your online banking or by requesting this information directly. This sheet will provide you with a CSV Reference Number. You can obtain the full details by following this link and entering the CSV number on this web page.
                                    <a class="d-block" href="https://sede.tributostenerife.es/sta/CarpetaPublic/Public?APP_CODE=STA&PAGE_CODE=VALDOCS">https://sede.tributostenerife.es/sta/CarpetaPublic/Public?APP_CODE=STA&PAGE_CODE=VALDOCS</a></li>
                                <li>2)	Request the IBI Payment Receipts from your local Ayuntamiento directly (most Ayuntamientos now accept email requests).</li>
                                <li>3)	Or, if you have a digital signature you can register online with your Local Ayuntamiento and download your previous IBI receipts. Here is an example link from Calvia Ayuntamiento
                                    <a class="d-block" href="https://www.admonline.calvia.com/cct/">https://www.admonline.calvia.com/cct/</a> </li>
                            </ul>
                            <h3 class="mt-2"><i class="fa fa-hand-o-right fa-fw" style="color: #c0b298"></i>What happens if I do not pay my Non-Resident Taxes.</h3>
                            <p>If you do not submit a non-resident tax return, you will likely have to pay these fees when you come to sell you property, together with any fines or interest that have accrued during the period. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="callto-action-area" style="background: url('{{asset('frontend/assets/images/bg/cta.webp')}}') no-repeat center center fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2>WORKING TOGETHER TO ENSURE YOUR YOU GET THE BEST ADVICE</h2>
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
    <style>
        .error-message{
            color: red;
        }
        .box{
            margin-top: 30px;
            border: 2px solid #c0b298;
            min-height: 430px;
            padding: 30px;
            border-radius: 30px;
            -webkit-transition: ease .3s;
            -moz-transition: ease .3s;
            -ms-transition: ease .3s;
            -o-transition: ease .3s;
            transition: ease .3s;
        }
        .box:hover{
            box-shadow: 0px 0px 35px 0px rgb(0 0 0 / 36%);
        }
        .box .icon{
            text-align: center;
            margin-bottom: 30px;
            padding-top: 30px;
        }
        .box .icon i{
            font-size: 60px;
        }
        .box .heading{
            padding-top: 30px;
        }
        .box .heading h2{
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }
        .calculator{
            border: 2px solid #c0b298;
            border-radius: 10px;
            padding: 20px;
        }
        .calculator h4{
            font-size: 22px;
            text-align: center;
        }
        .calculator .models p.cal-text{
            display: block;
            font-size: 12px;
            margin-top: 18px;
            text-align: center;
        }
        .calculator .group-sec label{
            font-size: 12px;
            text-align: center;
        }

         .radio-b label {
            display: inline-block;
            padding: 5px 15px;
            cursor: pointer;
             border: 1px solid #ced4da;
             border-radius: 4px;
             font-weight: bold;
        }
        .radio-b input[type="radio"] {
            display: none;
        }

        .radio-b input[type="radio"]:checked + label {
            border: solid 1px #c0b298;
            background: #c0b298;
            color: #fff;
        }
    </style>
@endsection
@push('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script>
        $('#calculator').validate({
            errorElement: 'span',
            errorClass: 'error-message',
            rules: {
                amount: {
                    required: true,
                },
            },
            messages: {
                amount: 'Amount can not be empty',
            },
            submitHandler:function (e){
                event.preventDefault();
                var amount = $('#amount');
                var year = $("input[name='year']:checked");
                var country = $("input[name='country']:checked");
                var totalAmount = 0;
                var countryVal = 1;
                if (year.val() === 'YES'){
                    if (country.val() === 'YES'){
                        totalAmount =  (((parseFloat(amount.val()) * 1.1) / 100) * 19) / 100;
                    }else{
                        totalAmount = (((parseFloat(amount.val()) * 1.1) / 100) * 24) / 100;
                    }
                }else{
                    if (country.val() === 'YES'){
                        totalAmount = (((parseFloat(amount.val()) * 2) / 100) * 19) / 100;
                    }else{
                        totalAmount = (((parseFloat(amount.val()) * 2) / 100) * 24) / 100;
                    }
                }
                $('#total').val(new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(totalAmount.toFixed(2)))
            }
        });
        function addCommas(x) {
            var parts = x.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }
    </script>
@endpush
