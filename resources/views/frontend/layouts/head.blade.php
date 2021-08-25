<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! SEOMeta::generate() !!}
    <link rel="icon" href="{{asset('frontend/assets/images/logo-app.svg')}}" type="image/gif" sizes="20x20" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    @stack('css')
</head>
