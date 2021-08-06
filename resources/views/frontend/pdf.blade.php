<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ public_path('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ public_path('frontend/assets/css/pdf.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ public_path('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />


{{--    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ asset('frontend/assets/css/pdf.css') }}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />--}}
</head>
<body>
    <div class="container-fluid">
        <div class="heading-top">
            <div class="row">
                <div class="col-md-4">
                    <h2>Keyconsultants</h2>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li><i class="fa fa-phone fa-fw"></i>(+34) 871 046 034</li>
                        <li><i class="fa fa-envelope-open fa-fw"></i>hola@keyconsultants.es</li>
                        <li><i class="fa fa-globe fa-fw"></i>{{request()->getHost()}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$data->title}}</h2>
                </div>
            </div>
        </div>
        <div class="main mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="img">
{{--                        <img style="width: 100%;height: auto" src="{{asset('storage/'.$data->feature_image)}}" alt="">--}}
                        <img style="width: 100%;max-height: 400px" src="{{storage_path('app/public/'.$data->feature_image)}}" alt="">
                    </div>
                    <div class="overview">
                        <h2>Overview</h2>
                    </div>
                    <div class="description">
                        <p>
                            <?php echo substr(strip_tags($data->description),0,500) . "..."; ?>
                        </p>
{{--                        {{Str::limit(strip_tags($data->description),500)}}--}}
                    </div>
                    <div class="price">
                        <h2>Price and Details</h2>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa fa-dot-circle-o"></i>Price : {{$data->currency ? :'€'.number_format($data->price)}}</li>
                            <li><i class="fa fa-dot-circle-o"></i>Reference Number : {{$data->reference_number}}</li>
                            <li><i class="fa fa-dot-circle-o"></i>Province :
                                {{$data->province}}
                            </li>
                            <li><i class="fa fa-dot-circle-o"></i>District :
                                {{$data->district}}
                            </li>
                            <li><i class="fa fa-dot-circle-o"></i>City : {{$data->city}}</li>

                            <li><i class="fa fa-dot-circle-o"></i>Type :
                                @php
                                    $type = \App\Helper\Helper::getFrontendPropertyTypeNameById($data->property_type);
                                    $type = json_decode($type,true);
                                    $type = implode(',',$type)
                                @endphp
                                {{$type}}</li>
                        </ul>
                    </div>
                    <div class="price">
                        <h2>Property Feature</h2>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa fa-dot-circle-o"></i>Bedroom : {{$data->room}}</li>
                            <li><i class="fa fa-dot-circle-o"></i>Bathrooms : {{$data->bathroom}}</li>
                            @if(@$data->land_area)
                            <li><i class="fa fa-dot-circle-o"></i>Land Area : {{$data->land_area}}</li>
                            @endif
                            @if(@$data->living_space)
                                <li><i class="fa fa-dot-circle-o"></i>Living Space : {{$data->living_space}}</li>
                            @endif
                            @if(@$data->balcony_terrace_area)
                                <li><i class="fa fa-dot-circle-o"></i>Balcony/Terrace Area : {{$data->balcony_terrace_area}}</li>
                            @endif
                            @if(@$data->additionally)
                                <li><i class="fa fa-dot-circle-o"></i>Additionally :
                                    @php
                                        $aditionally = explode(',',@$data->additionally);
                                        $aditionally = \App\Helper\Helper::getAdditionallyData($aditionally);
                                        if (!empty($aditionally)){
                                            echo implode(',',$aditionally);
                                        }
                                    @endphp
                                </li>
                            @endif
                            @if($data->feature)
                                <li>
                                    <i class="fa fa-dot-circle-o"></i>Feature :
                                    @php
                                        $feature = explode(',',@$data->feature);
                                        $feature = \App\Helper\Helper::getPropertyFeature($feature);
                                        if (!empty($feature)){
                                            echo implode(',',$feature);
                                        }
                                    @endphp
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="price">
                    <h2>More Media</h2>
                </div>
            </div>
        </div>
        <div class="fz" >
            @forelse($data->more_medias as $key => $media)
                @if($key < 5)
                <div class="row">
                    <div class="col-md-12" style="margin-top: 30px;">
                        <img style="width: 100%;max-height: 400px;" src="{{storage_path('app/public/'.$media->path)}}" alt="">
                    </div>
                </div>
                @endif
            @empty
            @endforelse

        </div>
    </div>
    <script src="{{ public_path('frontend/assets/js/jquery-3.2.1.min.js') }}" rel="stylesheet" type="text/css" />
    <script src="{{ public_path('frontend/assets/js/bootstrap.min.js') }}" rel="stylesheet" type="text/css" />
{{--    <script src="{{ asset('frontend/assets/js/jquery-3.2.1.min.js') }}" rel="stylesheet" type="text/css" />--}}
{{--    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" rel="stylesheet" type="text/css" />--}}
</body>
</html>
