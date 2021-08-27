@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    ACTING AS YOUR POWER OF ATTORNEY
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <p class="MsoNormal">
                            <b><u>Acting as your power of Attorney</u></b>
                        </p>
                        <p class="MsoNormal">
                            If you own a second home here on the island or are looking to buy a property and cannot
                            be here for the notary appointment, why not let Key Consultants act as your
                            representative in front of the notary and sell or buy your property for you.
                        </p>
                        <p class="MsoNormal">
                            As you appointed power of attorney, you will authorise us to obtain a copy of your deeds
                            from the land registry (<i>nota Simple</i>), obtain Plus Valia documents from the Local
                            Town Hall, where relevant request a certificate from the community that you are up to
                            date with your community fees, Deposit cheques into your bank account here in Spain or
                            third party bank accounts (such as a money transfer companies), pay taxes on your behalf
                            and changed utility contracts out of your name. And of course, act as your
                            representative in front of the Notary Public.
                        </p>
                        <p class="MsoNormal">
                            In order to appoint us as your power of attorney, you will need to prepare and grant a
                            Power of Attorney (poder de representacion)&nbsp; in front of a notary public.
                        </p>
                        <p class="MsoNormal">
                            We use and recommend the services of a local notary public here in Santa Ponça who we
                            have built a great relationship with over the years:-
                        </p>
                        <p class="MsoNormal" style="margin-bottom: 0.0001pt">
                            <strong>Maria Natavidad Mayol</strong> <strong>Contrereas.</strong>
                        </p>
                        <p class="MsoNormal" style="margin-bottom: 0.0001pt">Jaime I ,</p>
                        <p class="MsoNormal" style="margin-bottom: 0.0001pt">07180 Santa Ponsa</p>
                        <p>&nbsp;</p>
                        <p class="MsoNormal">
                            Please speak with us before contacting and appointing &nbsp;us at the notary as,
                            depending on your instructions and particular circumstances, will depend on the wording
                            of the power of attorney documentation.
                        </p>
                        <p class="MsoNormal">
                            If you would like further information on how we can assist you in front of the notary,
                            please do not hesitate to contact us.
                        </p>
                        <p class="MsoNormal">
                            Our charges for this service depend on the number of buyers and sellers.
                        </p>
                        <p class="MsoNormal">Please see our terms and conditions</p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Get Quote</a>
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
                    <h2>WORKING TOGETHER TO ENSURE YOUR INTERESTS ARE CORRECTLY REPRESENTED</h2>
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
