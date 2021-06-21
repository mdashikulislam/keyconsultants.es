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
                        <div class="product-images">
                            <img src="{{asset('storage/'.$property->feature_image)}}" alt="" />
                        </div>
                        @if($property->more_medias)
                            @foreach($property->more_medias as $media)
                                <div class="product-images">
                                    <img src="{{asset('storage/'.$media->path)}}" alt="" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="product-details-content">
                        <ul class="price-info">
                            <li>
                                <h4> {{$property->symbol.number_format($property->price)}}</h4>
                            </li>
{{--                            <li>--}}
{{--                                <span class="fevurite"><i class="fa fa-star"></i></span>--}}
{{--                            </li>--}}
                            <li>
                                <a href="facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="pdf"><img src="assets/images/icons/pdf.png" alt="" /></a>
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
                                <ul class="product-info-details">
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
                                    <li>
                                        <i class="fa fa-home"></i>
                                        @php
                                            $aditionally = explode(',',@$property->additionally);
                                            $data = \App\Helper\Helper::getAdditionallyData($aditionally);
                                            if (!empty($data)){
                                                echo implode(',',$data);
                                            }
                                        @endphp

                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <a href="#"><img src="assets/images/icons/pdf.png" alt="" /></a>
                                {!! $property->description !!}
                                <a href="#"
                                ><img src="assets/images/icons/pdf2.png" height="60" width="60" alt=""
                                    /></a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).on('click', '.fevurite', function () {
            $(this).find('.fa').addClass('fa-star-o').removeClass('fa-star');
        });
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
