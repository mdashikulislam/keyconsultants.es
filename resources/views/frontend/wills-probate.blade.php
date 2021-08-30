@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    Will Preparation
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <div class="pc">
                         <h2 style="text-align: justify">Let Key Consultants Prepare your Spanish Will</h2>
                         <p style="text-align: justify">At Key Consultants we cannot stress the importance of preparing a Will covering your assets in Spain and opting to for your estate to be distributed in accordance with the laws of your country of nationality.</p>
                    </div>
                    <div class="media-panel mt-5">
                        <h2>Non-Resident taxes – Holiday Homes</h2>
                        <p style="overflow: hidden;text-align: justify;margin-top: 30px;"> Rules in relation to inheritance and the distribution of assets differ from country to country. For example, did <img style="width: 35%;height: auto;float: left;" class="align-self-center mr-3" src="{{asset('frontend/assets/images/bow.png')}}" alt="Generic placeholder image">Rules in relation to inheritance and the distribution of assets differ from country to country. For example, did you know that a Spanish national cannot disinherit a child? Or that a spouse does not automatically inherit the property if there are descendants and or ascendants?
                        Whilst you may have made a Will in your country of Nationality, covering your property in Spain, on your death, your executor or beneficiary will need to apply for letters of administration or apply to the court for probate. This procedure could take a while and could surpass the time frame for accepting inheritance and paying the respective taxes here in Spain. Especially if your estate needs to be divided and taxes need to </p>
                        <p style="text-align: justify">Whilst in the UK your estate is taxed before the assets are distributed, in Spain the individual is taxed on the inheritance they are to receive before the assets can be transferred into their name. There is a limited timeframe of 6 months from the date of death in which to do this. After the 6 month deadline has ended, fines and interest will need to be paid before the assets can be transferred. </p>
                        <p style="text-align: justify">If you hold assets in different countries it is advisable to make a Will in each country covering the assets in each country.  At Key Consultants we can prepare your Spanish Will and even act as your executor in the event of your death.</p>
                        <p style="text-align: justify">If you jointly own your Spanish property with a spouse or partner, the chances are that you individually own a proportion of that property personally.  In the absence of a Will, do not expect that this property will automatically be transferred to your Spouse or Partner.  To read more about wills and inheritance, please feel free to download our “the Importance of making a will guide to the right of this page. </p>
                        <p style="text-align: justify">No matter where you live in Spain, if you would like Key Consultants to prepare your Will in both English and in Spanish, please complete the online form and make the payment. We will then prepare your will in accordance with your instructions and then book an appointment for you at a local notary so that you can have your will registered in the central Registry in Madrid.  There will be a small fee to pay at the notary on the day of signing. </p>
                    </div>
                    <div class="text text-center">
                        <a href="{{route('spanish.will')}}" style="display:inline-block;color: #fff;font-weight: bold;background: #c0b298;padding: 30px;margin-top: 50px;font-size: 20px;word-break: break-all;border-radius: 4px">Start your Spanish Will Now</a>
                        <p class="mt-5" style="text-align:justify ">(N.B: Before you start, please have your passport and NIE number to hand as well as the full names (and where possible NIE numbers) of your elected beneficiaries.Before you start, please have your passport and NIE number to hand as well as the full names (and where possible NIE numbers) of your elected beneficiaries.)</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2 style="color: #BF8F00;text-align: justify">Let Key Consultants Prepare your Will in Both Spanish and in English for only <strong>90€</strong> plus Iva</h2>
                    <div class="text text-center">
                        <a href="{{route('spanish.will')}}" style="display:inline-block;color: #fff;font-weight: bold;background: #c0b298;padding: 30px;margin-top: 50px;font-size: 18px;word-break: break-all;border-radius: 4px">Start your Spanish Will Now</a>
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
                    <h2 style="text-transform: uppercase">WORKING TOGETHER TO ENSURE YOUR Estate is distributed in accordance to your wishes</h2>
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
