@include('frontend.layouts.header')
<div
    class="breadcumb-area"
    style="background: url('{{asset('frontend/assets/images/bg/property.webp')}}') no-repeat center center / cover">
    <div class="container">
        <h1 class="breadcumb-title">@yield('breadcumb-title')</h1>
    </div>

    <div class="breadcumb-shape" data-negative="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path
                class="elementor-shape-fill"
                d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"
            ></path>
        </svg>
    </div>
</div>

@section('content')

@show
@include('frontend.layouts.footer')
