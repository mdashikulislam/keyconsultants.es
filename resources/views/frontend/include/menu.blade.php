@php
    $routeName = Route::currentRouteName();
@endphp

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
                <a class="{{$routeName == 'conveyancing.assistance' ? 'active':''}}" href="{{route('conveyancing.assistance')}}">Conveyancing</a>
            </li>
            <li>
                <a class="{{$routeName == 'non.resident.services' ? 'active':''}}" href="{{route('non.resident.services')}}">Non-Resident Taxes</a>
            </li>
            <li>
                <a class="{{$routeName == 'wills.probate' ? 'active':''}}" href="{{route('wills.probate')}}">Wills &amp; Probate</a>
            </li>
            <li>
                <a class="{{$routeName == 'power.of.attorney' ? 'active':''}}" href="{{route('power.of.attorney')}}">Power Of Attorney</a>
            </li>
            <li>
                <a class="{{$routeName == 'energy.performance.certificate' ? 'active':''}}" href="{{route('energy.performance.certificate')}}">Energy Performance Certificate</a>
            </li>
            <li>
                <a class="{{$routeName == 'cedular.de.habitabilidad' ? 'active':''}}" href="{{route('cedular.de.habitabilidad')}}">Cedular de Habitabilidad</a>
            </li>
            <li>
                <a class="{{$routeName == 'insurance.services' ? 'active':''}}" href="{{route('insurance.services')}}">Insurance Services</a>
            </li>
            <li>
                <a class="{{$routeName == 'green.energy' ? 'active':''}}" href="{{route('green.energy')}}">Green Electricity</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{route('our.fees')}}">For Businesess <i class="fa fa-caret-down"></i></a>
        <ul class="submenu">
            <li>
                <a class="{{$routeName == 'administracion.de.fincas' ? 'active':''}}" href="{{route('administracion.de.fincas')}}">Finca Administration</a>
            </li>
            <li>
                <a class="{{$routeName == 'our.fees' ? 'active':''}}" href="{{route('our.fees')}}">Our Fees</a>
            </li>
            <li>
                <a class="{{$routeName == 'accounts.bookkeeping' ? 'active':''}}" href="{{route('accounts.bookkeeping')}}">Accounts &amp; Bookkeeping</a>
            </li>
            <li>
                <a class="{{$routeName == 'taxation.matters' ? 'active':''}}" href="{{route('taxation.matters')}}">Taxation Matters</a>
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

