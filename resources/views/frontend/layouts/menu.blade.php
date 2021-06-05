@php
    $routeName = Route::currentRouteName();
@endphp
<ul class="mainmenu">
    <li>
        <a href="{{route('landing')}}" class="active">Home</a>
    </li>
    <li>
        <span>For Individuals <i class="fa fa-caret-down"></i></span>
        <ul class="submenu">
            <li>
                <a class="{{$routeName == 'property.sales' ? 'active':''}}" href="{{route('property.sales')}}">Real Estate Services</a>
            </li>
            <li>
                <a href="conveyancing-assistance.html">Conveyancing</a>
            </li>
            <li>
                <a href="non-resident-services.html">Non-Resident Taxes</a>
            </li>
            <li>
                <a href="wills-probate.html">Wills &amp; Probate</a>
            </li>
            <li>
                <a href="power-of-attorney.html">Power Of Attorney</a>
            </li>
            <li>
                <a href="energy-performance-certificate.html"
                >Energy Performance Certificate</a
                >
            </li>
            <li>
                <a href="cedular-de-habitabilidad.html">Cedular de Habitabilidad</a>
            </li>
            <li>
                <a href="insurance-services.html">Insurance Services</a>
            </li>
            <li>
                <a href="green-energy.html">Green Electricity</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="our-fees.html">For Businesess <i class="fa fa-caret-down"></i></a>
        <ul class="submenu">
            <li>
                <a href="administracion-de-fincas.html">Finca Administration</a>
            </li>
            <li>
                <a href="our-fees.html">Our Fees</a>
            </li>
            <li>
                <a href="accounts-bookkeeping.html">Accounts &amp; Bookkeeping</a>
            </li>
            <li>
                <a href="taxation-matters.html">Taxation Matters</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="about-us.html">About Us <i class="fa fa-caret-down"></i></a>
        <ul class="submenu">
            <li>
                <a href="meet-our-team.html">Meet Our Team</a>
            </li>
            <li>
                <a href="career-with-key-consultants.html">Career with Key Consultants</a>
            </li>
            <li>
                <a href="privacy-cookie-policy.html">Privacy &amp; Cookie Policy</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="properties.html">Property Search</a>
    </li>
    <li>
        <a href="contact.html">Contact</a>
    </li>
</ul>
