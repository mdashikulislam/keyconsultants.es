@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">SEO Feature</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Page Name</label>
                        <div class="col-sm-8">
                            <select id="name" name="name" class="form-control select2 @error('city') is-invalid @enderror" style="width: 100%;height: 50px!important;">
                                <option selected="selected" value="" disabled>Select Page</option>
                                {!! \App\Helper\Helper::getSeoDropDown() !!}
                            </select>
                        </div>
                    </div>
                    <form action="{{route('seo.store')}}" method="POST">
                        @csrf
                        <div id="append">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>

        $(document).ready(function (){
            $(document).on('change','#name',function (){
                $('#append').empty();
                var id = $(this).val();
                var url = '{{route('seo.data',['id'=>':id'])}}';
                url = url.replace(':id',id);
                $.ajax({
                   url:url,
                   method:'GET',
                   success:function (response){
                       console.log(response);
                       if (response.status == true){
                            var html = `<div class="col-md-12">
                                <input type="hidden" name="id" value="${response.data.id}">
                                <div class="form-group">
                                    <label >Url</label>
                                    <input disabled name="url" type="text"  value="${response.data.url ? response.data.url:''}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Title</label>
                                    <input  name="title" type="text"  value="${response.data.title ? response.data.title:''}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <select name="keyword[]" class="selectmulti" multiple="multiple" data-placeholder="type keyword" style="width: 100%;">`;
                                        if(response.data.keyword != null){
                                            $.each(response.data.keyword,function (key,value){
                                                html +=`<option selected value="${value}">${value}</option>`;
                                            });
                                        }
                           html += `</select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Description">${response.data.description ? response.data.description:''}</textarea>
                                </div>
                            </div>`;
                            html +=`<div class="col-sm-12"><button type="submit" class="btn btn-primary">Update</button></div>`;
                            $('#append').append(html)
                            ajaxCallSelect();
                       }
                   }
                });
            });

            $('.select2').select2();
            $('.selectmulti').select2({
                tags:true,
                tokenSeparators: [',', ' ']
            });
        })
        function ajaxCallSelect(){
            $('.selectmulti').select2({
                tags:true,
                tokenSeparators: [',', ' ']
            });
        }
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
            height: 40px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            background-color: #007bff;
            border-color: #006fe6;
            color: #fff;
            padding: 0 10px;
            margin-top: .31rem;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
            color: rgba(255,255,255,.7);
            float: right;
            margin-left: 5px;
            margin-right: -2px;
        }
        input[type="file"]{
            height: 45px!important;
        }
        .input-group a{
            height: 45px!important;
            line-height: 2!important;
        }
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
        .dropzone .dz-message .dz-button{
            background: none;
            color: #999;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            font-size: 40px;
        }
    </style>
@endpush
