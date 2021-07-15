@extends('frontend.layouts.inner-master')
@section('content')
    <div
        class="sale-breadcumb-area"
        style="background: url('{{asset('frontend/assets/images/bg/sale.png')}}') repeat-x center center / contain"
    >
        <div class="container">
            <h2 class="sale-breadcumb-title" style="font-size: 50px;">{{$property->title}}</h2>
        </div>
    </div>
    <div class="product-details-area ptb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="product-active">
                        <a href="{{asset('storage/'.$property->feature_image)}}" class="test-popup-link">
                            <div class="product-images" style="text-align: center!important;">
                                <img style="max-height: 500px;margin: auto" src="{{asset('storage/'.$property->feature_image)}}" alt="" />
                            </div>
                        </a>
                        @if($property->more_medias)
                            @foreach($property->more_medias as $media)
                                <a href="{{asset('storage/'.$media->path)}}" class="test-popup-link">
                                    <div class="product-images">
                                        <img style="max-height: 500px;margin: auto" src="{{asset('storage/'.$media->path)}}" alt="" />
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                    <div class="product-details-content">
                        <ul class="price-info">
                            <li>
                                <h4> {{$property->symbol.number_format($property->price)}}</h4>
                            </li>
                            <li>
                                @if(@$property->favorites->status == 1)
                                <form action="{{route('favorite')}}" method="post">@csrf
                                    <input type="hidden" name="mode" value="0">
                                    <input type="hidden" name="id" value="{{$property->id}}">
                                    <span class="fevurite"><i class="fa fa-star"></i></span>
                                </form>
                                @else
                                <form action="{{route('favorite')}}" method="post">@csrf
                                    <input type="hidden" name="mode" value="1">
                                    <input type="hidden" name="id" value="{{$property->id}}">
                                    <span class="fevurite"><i class="fa fa-star-o"></i></span>
                                </form>
                                @endif
                            </li>
                            <li>
                                <a target="_blank" href="https://facebook.com/sharer.php?u={{route('properties.details',['id'=>$property->id,'slug'=>$property->slug])}}" class="facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{route('properties.details.pdf',['id'=>$property->id,'slug'=>$property->slug])}}" class="pdf"><img src="{{asset('frontend/assets/images/icons/pdf2.png')}}" style="width: auto;height: 33px" alt="" /></a>
                            </li>
                            <li>
                                <a target="_blank" href="mailto:?subject={{$property->title}}&body={{route('properties.details.pdf',['id'=>$property->id,'slug'=>$property->slug])}}"  style="color: #c0b298;font-size: 40px;"><i class="fa fa-envelope fa-fw"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://web.whatsapp.com/send?text={{route('properties.details',['id'=>$property->id,'slug'=>$property->slug])}}" class="facebook" style="background: #25D366;padding-left: 10px;padding-right: 10px;"><i class="fa fa-whatsapp fa-fw"></i>Share</a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <ul class="price-info-details">
                                    <li><strong>Reference Number:</strong> {{$property->reference_number}}</li>
                                    <li><strong>City:</strong> {{$property->city}}</li>
                                    <li><strong>Region:</strong>
                                        @php
                                            $region = \App\Helper\Helper::getPropertyRegionName($property->region);
                                            $region = json_decode($region,true);
                                            $region = implode(',',$region)
                                        @endphp
                                        {{$region}}
                                    </li>
                                    <li><strong>Type:</strong>
                                        @php
                                          $type = \App\Helper\Helper::getFrontendPropertyTypeNameById($property->property_type);
                                          $type = json_decode($type,true);
                                          $type = implode(',',$type)
                                        @endphp
                                        {{$type}}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <ul class="product-info-details d-flex justify-content-end">
                                    <li><i class="fa fa-bed"></i> Bedroom: {{$property->room}}</li>
                                    <li><i class="fa fa-bath"></i> Bathrooms: {{$property->bathroom}}</li>
                                    @if($property->land_area)
                                    <li><i class="fa fa-home"></i> Land Area: {{$property->land_area}}</li>
                                    @endif
                                    @if($property->living_space)
                                    <li><i class="fa fa-home"></i> Living Space: {{$property->living_space}}</li>
                                    @endif
                                    @if($property->balcony_terrace_area)
                                    <li><i class="fa fa-home"></i> Balcony/Terrace Area:{{$property->balcony_terrace_area}}</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-12">
                                <h4 style="color: #c0b298;margin-bottom: 20px;">Information about this Property</h4>
                                {!! $property->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <form class="product-details-form" method="POST" action="{{route('property.enquiry')}}">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$property->id}}">
                        <label class="product-label">Your Query About*</label>
                        <ul class="checkbox-style">
                            <li>
                                <label><input   name="querys[]" value="Schedule viewing" type="checkbox" /> Schedule viewing </label>
                            </li>
                            <li>
                                <label><input  name="querys[]" value="Similar properties" type="checkbox" /> Similar properties </label>
                            </li>
                            <li>
                                <label><input  name="querys[]" value="More information" type="checkbox" /> More information </label>
                            </li>
                            <li>
                                <label><input  name="querys[]" value="Contact me" type="checkbox" /> Contact me </label>
                            </li>
                        </ul>
                        <label class="product-label">Your Question*</label>
                        <textarea name="question" class="input" placeholder="type question">{{old('question')}}</textarea>
                        @error('question')
                        <span  class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        <label class="product-label">Your Name*</label>
                        <input value="{{old('name')}}" name="name" class="input" type="text" placeholder="name" />
                        @error('name')
                            <span  class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        <label class="product-label">Your Phone*</label>
                        <input value="{{old('phone')}}" name="phone" class="input" type="tel" placeholder="Phone" />
                        @error('phone')
                            <span  class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        <label class="product-label">Your Email*</label>
                        <input value="{{old('email')}}" name="email" class="input" type="email" placeholder="Email" />
                        @error('email')
                            <span  class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        <button type="submit">Submit</button>
                    </form>
                    <div class="feature-list mt-3" style="background: #dededc;padding: 20px;">
                        <div class="label d-flex justify-content-start">
                            <i class="fa fa-home" style="font-size: 18px;margin-top: 2px;"></i><span style="font-size: 16px" class="ml-2 font-weight-bold">Features :</span>
                        </div>
                        <div class="list">
                            <ul>
                                @if($property->feature)
                                    @php
                                        $feature = explode(',',@$property->feature);
                                        $feature = \App\Helper\Helper::getPropertyFeature($feature);
                                        if (!empty($feature)){
                                            foreach ($feature as $f):
                                            echo '<li style="justify-content: left;margin-top:5px"><i class="fa fa-arrow-right fa-fw"></i>'.$f.'</li>';
                                            endforeach;
                                        }
                                    @endphp
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        // $(document).on('click', '.fevurite', function () {
        //     $(this).find('.fa').toggleClass('fa-star-o').toggleClass('fa-star');
        //     if ($(this).find('.fa').hasClass('fa-star-o')){
        //
        //     }else{
        //         console.log('a')
        //     }
        // });

        // $.getJSON("https://jsonip.com?callback=?", function(data) {
        //     alert("Your IP address is :- " + data.ip);
        // });

        $('.fevurite').on('click',function (){
           $(this).parent('form').submit();
        });

        $(document).ready(function (){
          $('.test-popup-link').magnificPopup({
              type: 'image',
              gallery: {
                  enabled: true
              },
          });
        })
    </script>
    <script>
        $('.product-active').slick({
            dots: true,
            infinite: false,
            arrows: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <style>
        .product-details-content .price-info li:last-child{
            margin-right: 0;
        }
        .product-details-content .price-info li:first-child h4{
            width: 414px;
        }
    </style>
@endpush
