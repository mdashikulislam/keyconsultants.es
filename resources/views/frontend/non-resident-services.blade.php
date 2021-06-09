@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    NON-RESIDENT SERVICES
@endsection
@section('content')
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="property-content">
                        <p>
                            At&nbsp;<strong>Key Consultants Mallorca</strong>&nbsp; we are pleased to offer you our
                            outstanding Administración de Fincas – a complete professional service for your
                            community with a personal touch.
                        </p>
                        <p>
                            We are not just administrators of your community, we want you to think that we are part
                            of it.&nbsp; We will assist the president and works committee members in every way we
                            can to ensure the correct running of your community. We have invested in the latest IT
                            equipment and providing an online portal that can be accessed 24/7 by every property
                            owner within your &nbsp;community. In the portal you can see your co-efficient, access
                            your accounts, change your bank details, report a complaint and much much more.
                        </p>
                        <div class="text-center mt-50">
                            <a href="{{route('contact')}}" class="contact-btn">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.contact-banner')
    <div class="featured-area">
        <div class="container">
            <h2 class="featured-title">Amongst other things our Administración de Fincas services includes:</h2>
        </div>
        <div class="featured-background">
            <div class="featured-shape" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1800 5.8" preserveAspectRatio="none">
                    <path
                        class="elementor-shape-fill"
                        d="M5.4.4l5.4 5.3L16.5.4l5.4 5.3L27.5.4 33 5.7 38.6.4l5.5 5.4h.1L49.9.4l5.4 5.3L60.9.4l5.5 5.3L72 .4l5.5 5.3L83.1.4l5.4 5.3L94.1.4l5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3L161 .4l5.4 5.3L172 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3L261 .4l5.4 5.3L272 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3L361 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3L461 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1L550 .4l5.4 5.3L561 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L650 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L750 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2L850 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4V0H-.2v5.8z"
                    ></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="featured-subtitle">HERE ARE SOME OF THE THINGS THAT WE INCLUDE:</h3>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                The Property Administrator acts as Secretary and Administrator and calls ordinary
                                meetings, sends Minutes, liquidations, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                We have a meeting room at no additional cost, and with a max. 25 people, if they do
                                not have a meeting place or we move to the place designated by the community to hold
                                the meetings.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Follow-up of the defaulters and their subsequent claim through the courts through
                                “payment orders” (whose preparation fees, lawyers and court costs are always borne
                                by the defendants).
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                In communities, where there is a large presence of foreign owners, we manage the
                                documentation with translations into English or German.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Preparation and sending of expense settlements (as agreed in the Meeting). The
                                Administration can prepare settlements with the frequency set by the Community:
                                monthly, bi-monthly, quarterly, quarterly, semi-annually, annually by installments,
                                by budget
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                In the case of recently built buildings, our work ranges from the drafting of the
                                Statutes, constitution of the community fund, registration of community and
                                individual accountants, legalization of the Minutes Book, various steps with the
                                developer, CIF processing, procedures for obtaining ford, high lines telephone for
                                the elevators, search and contracting of cleaning services, surveillance, porter,
                                integral maintenance, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Attend to the maintenance of the building, its facilities and the proper functioning
                                of the contracted services, for which we have the collaboration of a wide range of
                                industrialists that fully cover any type of unforeseen event and works. We request
                                two estimates, as well as incident management.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Bank management of the current account of the community, as authorized, we manage
                                the day to day of their operations working with the main banking entities.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                All those procedures processed before public bodies and monitoring by the
                                Administrator of the repairs and / or improvements to be made.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Management of the Organic Law on Data Protection: owners, security surveillance,
                                etc. With the collaboration of Conversia, leader in the protection management
                                sector.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Process contracts and attend to payments related to the personnel at the service of
                                the community; such as doorman, maintainer, gardener, night watch, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                        <div class="featured-wrap">
                            <p>
                                Search for the most suitable insurance for the community, with adjusted premiums,
                                and claims processing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
