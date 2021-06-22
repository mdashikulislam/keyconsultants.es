@extends('backend.layouts.master')
@section('content')
    <form action="{{route('admin.property.update',['id'=>$property->id,'slug'=>$property->slug])}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Property</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Property Title</label>
                            <input type="text" name="title" value="{{$property->title ? :old('title')}}" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Property Description</label>
                            <textarea id="summernote" name="description" class="form-control @error('description') is-invalid @enderror">{{$property->description ? :old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{--                <div class="card card-primary">--}}
                {{--                    <div class="card-header">--}}
                {{--                        <h3 class="card-title">Reference Number</h3>--}}
                {{--                        <div class="card-tools">--}}
                {{--                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">--}}
                {{--                                <i class="fas fa-minus"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                    <div class="card-body">--}}
                {{--                        <div class="form-group clearfix" id="reference_number">--}}
                {{--                            {!! \App\Helper\Helper::getReferenceNumberCheckbox() !!}--}}
                {{--                            @error('reference_number')--}}
                {{--                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>--}}
                {{--                            @enderror--}}
                {{--                        </div>--}}

                {{--                        <div class="form-group">--}}
                {{--                            <button  data-toggle="modal" data-target="#modal_add_new_reference_number" style="color: #007bff;" type="button" class="btn  btn-primary btn-sm text-white"><i class="fa fa-plus fa-fw"></i>Add New Reference Number</button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <!-- /.card-body -->--}}
                {{--                </div>--}}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName" style="display: block">Price</label>
                            <input placeholder="€" value="{{$property->symbol ? :old('symbol')}}" name="symbol" type="text" style="width:13%;margin-right: 2%;" class="form-control float-left">
                            <input style="width: 85%" type="number" placeholder="ex:500000"  name="price" value="{{$property->price ? :old('price')}}" class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select name="city" class="form-control select2 @error('city') is-invalid @enderror" style="width: 100%;height: 50px!important;">
                                <option selected="selected" value="" disabled>Select City</option>
                                <option {{$property->city == 'Alcudia' ? 'selected':''}} value="Alcudia">Alcudia</option>
                                <option {{$property->city == 'Binssalem' ? 'selected':''}} value="Binssalem">Binssalem</option>
                                <option {{$property->city == 'Cala Ratjada' ? 'selected':''}} value="Cala Ratjada">Cala Ratjada</option>
                                <option {{$property->city == "Cala d'Or" ? 'selected':''}} value="Cala d'Or">Cala d'Or</option>
                                <option {{$property->city == 'Cala Moraia' ? 'selected':''}} value="Cala Moraia">Cala Moraia</option>
                                <option {{$property->city == 'Cala Millor' ? 'selected':''}} value="Cala Millor">Cala Millor</option>
                                <option {{$property->city == 'Calvià Pueblo' ? 'selected':''}} value="Calvià Pueblo">Calvià Pueblo</option>
                                <option {{$property->city == 'Costa de la Calma' ? 'selected':''}} value="Costa de la Calma">Costa de la Calma</option>
                                <option {{$property->city == 'Deià' ? 'selected':''}} value="Deià">Deià</option>
                                <option {{$property->city == 'Esporles' ? 'selected':''}} value="Esporles">Esporles</option>
                                <option {{$property->city == 'Fornalutx' ? 'selected':''}} value="Fornalutx">Fornalutx</option>
                                <option {{$property->city == 'Inca' ? 'selected':''}} value="Inca">Inca</option>
                                <option {{$property->city == 'Manacor' ? 'selected':''}} value="Manacor">Manacor</option>
                                <option {{$property->city == 'Palma de Mallorca' ? 'selected':''}} value="Palma de Mallorca">Palma de Mallorca</option>
                                <option {{$property->city == 'Pollença' ? 'selected':''}} value="Pollença">Pollença</option>
                                <option {{$property->city == 'Puerto Pollensa' ? 'selected':''}} value="Puerto Pollensa">Puerto Pollensa</option>
                                <option {{$property->city == 'Sa Pobla' ? 'selected':''}} value="Sa Pobla">Sa Pobla</option>
                                <option {{$property->city == 'Santa Ponça' ? 'selected':''}} value="Santa Ponça">Santa Ponsa</option>
                                <option {{$property->city == 'S´Arraco' ? 'selected':''}} value="S´Arraco">S'Arraco</option>
                                <option {{$property->city == 'Sineu' ? 'selected':''}} value="Sineu">Sineu</option>
                                <option {{$property->city == 'Sóller' ? 'selected':''}} value="Sóller">Sóller</option>
                                <option {{$property->city == 'Valldemossa' ? 'selected':''}} value="Valldemossa">Valldemossa</option>
                                <option {{$property->city == 'Port Andratx' ? 'selected':''}} value="Port Andratx">Port Andratx </option>
                                <option {{$property->city == 'El Toro' ? 'selected':''}} value="El Toro">El Toro</option>
                                <option {{$property->city == 'Son Ferrer' ? 'selected':''}} value="Son Ferrer">Son Ferrer</option>
                                <option {{$property->city == 'Paguera' ? 'selected':''}} value="Paguera">Paguera</option>
                            </select>
                            @error('city')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Region</label>
                            <select name="region[]" class="select2 @error('region') is-invalid @enderror" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                @php
                                    $region = null;
                                    if ($property->region){
                                        $region = explode(',',$property->region);
                                    }
                                @endphp
                                {!! \App\Helper\Helper::getRegionDropdown($region ? :old('region')) !!}
                            </select>
                            @error('region')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Rooms</label>
                            <input name="room" type="number"  value="{{$property->room ? :old('room')}}" class="form-control @error('room') is-invalid @enderror">
                            @error('room')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Bathrooms</label>
                            <input name="bathroom" value="{{$property->bathroom ? :old('bathroom')}}" type="number"  class="form-control @error('living_space') is-invalid @enderror">
                            @error('bathroom')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Land Area</label>
                            <input placeholder="ex: 720m2" name="land_area" value="{{$property->land_area ? :old('land_area')}}" type="text"  class="form-control @error('land_area') is-invalid @enderror">
                            @error('land_area')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Living Space</label>
                            <input placeholder="ex: 720m2"  name="living_space" value="{{$property->living_space ? :old('living_space')}}" type="text"  class="form-control @error('living_space') is-invalid @enderror">
                            @error('living_space')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Balcony/Terrace Area</label>
                            <input placeholder="ex: 720m2"  type="text" value="{{$property->balcony_terrace_area ? :old('balcony_terrace_area')}}" name="balcony_terrace_area" class="form-control @error('balcony_terrace_area') is-invalid @enderror">
                            @error('balcony_terrace_area')
                            <span style="display:block;" class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-dark btn-lg btn-block mb-3"><i class="fa fa-save fa-fw"></i>Publish</button>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Status</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group clearfix" id="property_status">
                            {!! \App\Helper\Helper::getPropertyStatusCheckbox($property->property_status) !!}
                        </div>
                        <div class="form-group">
                            <button  data-toggle="modal" data-target="#modal_add_new_property_status" style="color: #007bff;" type="button" class="btn  btn-primary btn-sm text-white"><i class="fa fa-plus fa-fw"></i>Add New Property Status</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Additionally</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group clearfix" id="property_additionally">
                            @php
                                $additionally = null;
                                if ($property->additionally){
                                    $additionally = explode(',',$property->additionally);
                                }
                            @endphp
                            {!! \App\Helper\Helper::getPropertyAditionallyCheckbox($additionally) !!}
                        </div>
                        <div class="form-gtoup">
                            <button  data-toggle="modal" data-target="#modal_add_new_additionally" style="color: #007bff;" type="button" class="btn  btn-primary btn-sm text-white"><i class="fa fa-plus fa-fw"></i>Add New Additionally</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Type</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group clearfix" id="property_type">
                            @php
                                $propertyType = null;
                                if ($property->property_type){
                                    $propertyType = explode(',',$property->property_type);
                                }
                            @endphp
                            {!! \App\Helper\Helper::getPropertyTypeCheckbox($propertyType) !!}
                        </div>
                        <div class="form-gtoup">
                            <button  data-toggle="modal" data-target="#modal_add_new_property_type" style="color: #007bff;" type="button" class="btn  btn-primary btn-sm text-white"><i class="fa fa-plus fa-fw"></i>Add New Property Type</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Feature</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group clearfix" id="property_feature">
                            @php
                                $feature = null;
                                if ($property->feature){
                                    $feature = explode(',',$property->feature);
                                }
                            @endphp
                            {!! \App\Helper\Helper::getPropertyFeatureCheckbox($feature) !!}
                        </div>
                        <div class="form-gtoup">
                            <button  data-toggle="modal" data-target="#modal_add_new_property_feature" style="color: #007bff;" type="button" class="btn  btn-primary btn-sm text-white"><i class="fa fa-plus fa-fw"></i>Add New Property Feature</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Featured Image</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="preview">
                            <img style="width: 100%;height: auto" src="{{$property->feature_image ? asset('storage/'.$property->feature_image):asset('uploads/no_image.jpg')}}" alt="">
                        </div>
                        <div class="upload mt-2">
                            <input type="file" name="feature_image" class="form-control" id="feature_image">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <input type="hidden" id="more_media" name="more_media">
    </form>
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">More Media</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form  id="more_media_dropzone" class="dropzone" method="POST" enctype="multipart/form-data" >@csrf</form>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
    <div class="modal fade" id="modal_add_new_property_status"  style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="add_new-property_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Property Status</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal_add_new_additionally"  style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="add_new_additionally_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Additionally</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{--    <div class="modal fade" id="modal_add_new_reference_number"  style=" padding-right: 17px;" aria-modal="true" role="dialog">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <form id="add_new_reference_number_form">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h4 class="modal-title">Add New Reference Number</h4>--}}
    {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                            <span aria-hidden="true">×</span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        <div class="form-group">--}}
    {{--                            <label for="">Name</label>--}}
    {{--                            <input name="name" type="text" class="form-control">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-footer justify-content-between">--}}
    {{--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
    {{--                        <button type="submit" class="btn btn-primary">Save</button>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--            <!-- /.modal-content -->--}}
    {{--        </div>--}}
    {{--        <!-- /.modal-dialog -->--}}
    {{--    </div>--}}
    <div class="modal fade" id="modal_add_new_property_type"  style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="add_new_property_type_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Property Type</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal_add_new_property_feature"  style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="add_new_property_feature_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Property Feature</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@push('js')
    <script src="{{asset('backend/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('#summernote').summernote({
            height:400
        });
        $('.select2').select2()
    </script>
    <script>
        $(document).on('click','.remove_preview',function (e){
            e.preventDefault();
            $(this).parent('div').parent('div').remove();
        });

        $(document).ready(function (){

            // $(".dropzone").dropzone();
            $('#add_new-property_form').on('submit',function (e){
                e.preventDefault();
                var name = $(this).find('input[name="name"]').val();
                $.ajax({
                    url:'{{route('add.property.status')}}',
                    method:'POST',
                    data:{
                        name:name,
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (response){
                        if (response.status == true){
                            $('#modal_add_new_property_status').modal('hide');
                            $('#property_status').append(`<div class="icheck-primary">
                                <input value="${response.data.id}" name="property_status" type="radio" id="property-status-${response.data.id}" checked>
                                <label for="property-status-${response.data.id}">
                                    ${response.data.name}
                                </label>
                              </div>`);
                            $('#add_new-property_form').find('input[name="name"]').val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'Property Status added successful'
                            });
                        }
                    },
                    error:function (error){
                        Swal.fire(`${error.responseJSON.errors.name}`);
                    }
                });
            });
            $('#add_new_additionally_form').on('submit',function (e){
                e.preventDefault();
                var name = $(this).find('input[name="name"]').val();
                $.ajax({
                    url:'{{route('add.property.additionally')}}',
                    method:'POST',
                    data:{
                        name:name,
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (response){
                        if (response.status == true){
                            $('#modal_add_new_additionally').modal('hide');
                            $('#property_additionally').append(`<div class="icheck-primary ">
                                <input value="${response.data.id}" name="additionally[]" type="checkbox" id="additionally-${response.data.id}" checked>
                                <label for="additionally-${response.data.id}">
                                    ${response.data.name}
                                </label>
                              </div>`);
                            $('#add_new_additionally_form').find('input[name="name"]').val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'Additionally added successful'
                            });
                        }
                    },
                    error:function (error){
                        Swal.fire(`${error.responseJSON.errors.name}`);
                    }
                });
            });
            $('#add_new_reference_number_form').on('submit',function (e){
                e.preventDefault();
                var name = $(this).find('input[name="name"]').val();
                $.ajax({
                    url:'{{route('add.property.reference.number')}}',
                    method:'POST',
                    data:{
                        name:name,
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (response){
                        if (response.status == true){
                            $('#modal_add_new_reference_number').modal('hide');
                            $('#reference_number').append(`<div class="icheck-primary d-inline mr-2">
                                <input value="${response.data.id}" name="reference_number[]" type="checkbox" id="reference_number-${response.data.id}" checked>
                                <label for="reference_number-${response.data.id}">
                                    ${response.data.name}
                                </label>
                              </div>`);
                            $('#add_new_reference_number_form').find('input[name="name"]').val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'Reference Number added successful'
                            });
                        }
                    },
                    error:function (error){
                        Swal.fire(`${error.responseJSON.errors.name}`);
                    }
                });
            });
            $('#add_new_property_type_form').on('submit',function (e){
                e.preventDefault();
                var name = $(this).find('input[name="name"]').val();
                $.ajax({
                    url:'{{route('add.property.type')}}',
                    method:'POST',
                    data:{
                        name:name,
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (response){
                        if (response.status == true){
                            $('#modal_add_new_property_type').modal('hide');
                            $('#property_type').append(`<div class="icheck-primary d-inline mr-2">
                                <input value="${response.data.id}" name="property_type[]" type="checkbox" id="property_type-${response.data.id}" checked>
                                <label for="property_type-${response.data.id}">
                                    ${response.data.name}
                                </label>
                              </div>`);
                            $('#add_new_property_type_form').find('input[name="name"]').val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'Reference Number added successful'
                            });
                        }
                    },
                    error:function (error){
                        Swal.fire(`${error.responseJSON.errors.name}`);
                    }
                });
            });
            $('#add_new_property_feature_form').on('submit',function (e){
                e.preventDefault();
                var name = $(this).find('input[name="name"]').val();
                $.ajax({
                    url:'{{route('add.property.feature')}}',
                    method:'POST',
                    data:{
                        name:name,
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (response){
                        if (response.status == true){
                            $('#modal_add_new_property_feature').modal('hide');
                            $('#property_feature').append(`<div class="icheck-primary d-inline mr-2">
                                <input value="${response.data.id}" name="feature[]" type="checkbox" id="property_feature-${response.data.id}" checked>
                                <label for="property_feature-${response.data.id}">
                                    ${response.data.name}
                                </label>
                              </div>`);
                            $('#add_new_property_feature_form').find('input[name="name"]').val('');
                            Toast.fire({
                                icon: 'success',
                                title: 'Property Added successful'
                            });
                        }
                    },
                    error:function (error){
                        Swal.fire(`${error.responseJSON.errors.name}`);
                    }
                });
            });
            $('#feature_image').on('change',function (){
                display(this);
            });

            // $('#add_More').on('click',function (e){
            //     e.preventDefault();
            //     var html = `<div class="input-group mb-2">
            //                   <input type="file" name="more_media[]" class="form-control">
            //                   <div class="input-group-append">
            //                     <a class="btn btn-danger remove_preview" href=""><i class="fa fa-trash"></i></a>
            //                   </div>
            //                 </div>`;
            //
            //     $('.input-box').append(html);
            // });

        });

        function display(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('.preview img').attr('src', event.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        Dropzone.autoDiscover = false;
        var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
        // imageDataArray variable to set value in crud form
        var imageDataArray = new Array;
        // fileList variable to store current files index and name
        var fileList = new Array;
        var i = 0;

        $(function(){
            uploader = new Dropzone(".dropzone",{
                url: "{{route('more.media.upload')}}",
                paramName : "file",
                uploadMultiple :false,
                acceptedFiles : "image/*",
                addRemoveLinks: true,
                forceFallback: false,
                maxFilesize: 256, // Set the maximum file size to 256 MB
                parallelUploads: 100,
                init:function (){
                    myDropzone = this;
                    $.ajax({
                        url: '{{route('more.media.get')}}',
                        type: 'get',
                        data: {property_id: '{{$property->id}}'},
                        dataType: 'json',
                        success: function(response){
                            $.each(response, function(key,value) {
                                var mockFile = { name: value.name, size: value.size };
                                // console.log(value)
                                myDropzone.emit("addedfile", mockFile);
                                myDropzone.emit("thumbnail",mockFile, value.path_val);
                                myDropzone.emit("complete", mockFile);
                                imageDataArray.push(value.id)
                                fileList[i] = {
                                    "serverFileName": value.id,
                                    "fileName": value.name,
                                    "fileId": i
                                };
                                //

                                i += 1;
                                // console.log(fileList);
                                console.log(imageDataArray)
                                $('#more_media').val(imageDataArray);

                            });
                        }
                    });
                }
            });//end drop zone
            uploader.on("success", function(file,response) {
                // console.log(response)
                imageDataArray.push(response)
                fileList[i] = {
                    "serverFileName": response,
                    "fileName": file.name,
                    "fileId": i
                };

                i += 1;
                // console.log(imageDataArray);
                $('#more_media').val(imageDataArray);
            });
            uploader.on("removedfile", function(file) {
                var rmvFile = "";
                for (var f = 0; f < fileList.length; f++) {
                    if (fileList[f].fileName == file.name) {
                        // remove file from original array by database image name
                        imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                        $('#more_media').val(imageDataArray);
                        // get removed database file name
                        rmvFile = fileList[f].serverFileName;
                        // get request to remove the uploaded file from server
                        $.get( "{{route('more.media.delete')}}", { id: rmvFile } )
                            .done(function( data ) {
                                //console.log(data)
                            });
                        // reset imageDataArray variable to set value in crud form

                    }
                }

            });
        });
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('backend/dropzone/dropzone.css')}}">
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
