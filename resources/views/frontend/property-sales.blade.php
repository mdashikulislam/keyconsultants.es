@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    PROPERTY SALES
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <h2 class="property-title">sell your property with key consultants</h2>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <p>
                            &nbsp;If you are looking to sell your property then Key Consultants should be your first
                            port of call. We at Key Consultants we set ourselves apart from other real estate agents
                            on the island and our after sales service is unbeatable.
                        </p>
                        <p>
                            Our fee for a real estate service is 5% of the overall sale fee plus IVA. This is the
                            lower end of the industry standard, some estate agents charging between 5 and 7%. Unlike
                            other estate agents that simply introduce a buyer and show the property (introduction).
                            At Key Consultants we go much much further and work hard for our fee. &nbsp;What does
                            our fee include:-
                        </p>
                        <p>Here goes:-</p>
                        <ul>
                            <li>
                                We will market your property for sale and also place it for sale (with your
                                permission) with a network &nbsp;of other real estate agents on the island that we
                                work with, ensuring you get full exposure.
                            </li>
                            <li>
                                we will work hard to get you a buyer and once found, we will prepare the option
                                contract for sale.
                            </li>
                        </ul>
                        <p>
                            <strong><u>Why we are different</u></strong>
                        </p>
                        <p>
                            Most real estate agents finish their service at the introductory point of sale. However,
                            at Key Consultants we go above and beyond to ensure that your sale goes through smoothly
                            at no extra cost (apart from some possible small disbursements).&nbsp; At no extra costs
                            to you, we use our experience as a Gestoria and accountants to assist you with the full
                            conveyancing process and that’s what makes our service exceptional and value for money:-
                        </p>
                        <ul>
                            <li>
                                We will prepare your contract for sale and different languages. – this contract will
                                be subject to “arras” (deposit) which means that you will not be taxed on the
                                deposit amount.
                            </li>
                            <li>
                                We can accept the deposit in our escrow account and undertake the necessary “know
                                your client and Money Laundering regulations and checks.
                            </li>
                            <li>Issue you, where relevant, with an inventory list.</li>
                            <li>
                                We will Exchange the contracts between you and the seller (at a distance, if
                                necessary).
                            </li>
                            <li>
                                Obtain the Nota Simple Online deeds (we are registered with the Registriadores de
                                España to provide this service)- this is subject to a 30€ plus IVA fee for each
                                requested deed.
                            </li>
                            <li>
                                We will arrange an energy performance certificate to be undertaken (disbursement fee
                                applicable).
                            </li>
                            <li>
                                We will apply for your digital signature and obtain a certificate of “taxation
                                residence in Spain” if relevant (to save on unnecessary taxes being paid).
                            </li>
                            <li>
                                We will obtain your consent and obtain a statement for <em>Plus Valia</em> from the
                                local council (local tax levied by the council).
                            </li>
                            <li>We will attend (if applicable) any bank valuation survey</li>
                            <li>
                                We will arrange for an energy performance certificate to be undertaken (fee for the
                                certificate to be paid for by the seller) and attend at the meeting.
                            </li>
                            <li>
                                We will arrange for a Cedular de habitabilidad (if applicable) to be undertaken (fee
                                for the certificate to be paid for by the seller) and attend at the meeting.
                            </li>
                            <li>
                                We will request (if applicable) a certificate from the community that you are
                                up-to-date with your community fees.
                            </li>
                            <li>
                                We will prepare a completion statement with apportionments of community fees and
                                rubbish and rates bills.
                            </li>
                            <li>
                                We will liaise with the notary and arrange to have all paperwork in order and have a
                                copy of the draft sale deed prepared in advance of the meeting with the notary.
                            </li>
                        </ul>
                        <p>
                            And that´s not all. We also have an after sales service after the notary appointment has
                            been completed:-
                        </p>
                        <ul>
                            <li>
                                We will take the new owners to change the utility bills (electric and water) to
                                ensure that your contract with these suppliers is finished.
                            </li>
                            <li>
                                We will (where applicable) arrange for your non-resident taxes (3% modelo 211) to be
                                settled and submit the tax forms on your behalf.
                            </li>
                            <li>We will (where applicable) arrange for your Plus Valia taxes to be paid.</li>
                            <li>
                                We will notify the community administrators (if applicable) of the new owners
                                details removing you from any further community fee obligations of the community.
                            </li>
                            <li>
                                We can also calculate your capital gains (although an extra charge will apply for
                                this) if you so require.
                            </li>
                        </ul>
                        <p>
                            Effectively, when you instruct Key Consultants to deal with your sale, you can rest
                            assure that the sale of your property is in good hands as our fee includes the whole
                            sales conveyancing process! Saving you mucho dinero (usually around 1.5% plus IVA of the
                            sale price) – no other real estate agent does this!
                        </p>
                        <p>&nbsp;Simplicity at its best.</p>
                        <p>To find out more about our real estate services, contact us.</p>
                        <p>
                            (disclaimer: the above services are included when the property is fully legally
                            registered and the title is not subject to any legal breaches, including lack of
                            planning permission and building regulations control and licensing regulation breaches.
                            Where a matter becomes contentious as a result of the above, additional fees may apply).
                        </p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.contact-banner')
@endsection
