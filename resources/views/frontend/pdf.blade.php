<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">--}}


</head>
<body style="background: #ededed">
    <div class="wrapper mt-1">
        <div class="container">
            <div class="heading-text" style="background: #30A79B;color: #fff">
                <div class="row">
                <div class="col-md-4">
                    <h2>Keyconsultants</h2>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li><a href="">(+34) 871 046 034</a></li>
                        <li><a href="">hola@keyconsultants.es</a></li>
{{--                        <li><a href="">{{request()->getHost()}}</a></li>--}}
                    </ul>
                    <img src="{{storage_path('app/public/'.$data->feature_image)}}" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
{{--    <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}" ></script>--}}
{{--    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>--}}
</body>
</html>
