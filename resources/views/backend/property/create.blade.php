@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
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
                        <input type="text" name="title" value="{{old('title')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="summernote">Property Description</label>
                        <textarea id="summernote" name="description" class="form-control">{{old('description')}}</textarea>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Reference Number</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary1" checked>
                            <label for="checkboxPrimary1">
                                Checkbox
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary1" checked>
                            <label for="checkboxPrimary1">
                                Checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
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
                        <label for="inputName">Price</label>
                        <input type="text" name="price" value="{{old('price')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select class="form-control select2" style="width: 100%;height: 50px!important;">
                            <option selected="selected" value="" disabled>Select City</option>
                            <option value="Alcudia">Alcudia</option>
                            <option value="Binssalem">Binssalem</option>
                            <option value="Cala Ratjada">Cala Ratjada</option>
                            <option value="Cala d'Or">Cala d'Or</option>
                            <option value="Cala Moraia">Cala Moraia</option>
                            <option value="Cala Millor">Cala Millor</option>
                            <option value="Calvià Pueblo">Calvià Pueblo</option>
                            <option value="Costa de la Calma">Costa de la Calma</option>
                            <option value="Deià">Deià</option>
                            <option value="Esporles">Esporles</option>
                            <option value="Fornalutx">Fornalutx</option>
                            <option value="Inca">Inca</option>
                            <option value="Manacor">Manacor</option>
                            <option value="Palma de Mallorca">Palma de Mallorca</option>
                            <option value="Pollença">Pollença</option>
                            <option value="Puerto Pollensa">Puerto Pollensa</option>
                            <option value="Sa Pobla">Sa Pobla</option>
                            <option value="Santa Ponça">Santa Ponsa</option>
                            <option value="S´Arraco">S'Arraco</option>
                            <option value="Sineu">Sineu</option>
                            <option value="Sóller">Sóller</option>
                            <option value="Valldemossa">Valldemossa</option>
                            <option value="Port Andratx">Port Andratx </option>
                            <option value="El Toro">El Toro</option>
                            <option value="Son Ferrer">Son Ferrer</option>
                            <option value="Paguera">Paguera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Region</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Rooms</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Bathrooms</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Land Area</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Living Space</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Balcony/Terrace Area
                        </label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-4">
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
                    <div class="form-group clearfix">
                        <div class="icheck-primary" id="property_status">
                            <input value="For Rent" id="property_status1" name="property_status[]" type="checkbox"  checked>
                            <label for="property_status1">
                                For Rent
                            </label>
                        </div>
                        <button  data-toggle="modal" data-target="#modal_add_new_property_status" style="color: #007bff;" type="button" class="btn"><i class="fa fa-plus fa-fw"></i>Add New Property Status</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
@endsection
@push('js')
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('#summernote').summernote({
            height:400
        });
        $('.select2').select2()
    </script>
    <script>
        $(document).ready(function (){
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
                        console.log(response)
                    },
                    error:function (error){
                        var errorValue = error.responseJSON;
                    }
                });
            });
        });
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
    </style>
@endpush
