@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="font-weight:bold;" class="card-title">Property List</h3>
                    <a href="{{route('admin.property.create')}}" style="float: right" class="btn btn-info"><i class="fa fa-plus fa-fw"></i>Add Property</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('admin.property.index')}}" method="GET">
                       <div class="row">
                           <div class="form-group col-sm-12 col-lg-3">
                               <input value="{{request()->input('keyword') ? :''}}" type="text" name="keyword" class="form-control" placeholder="Property Title">
                           </div>
                           <div class="form-group col-sm-12 col-lg-3">
                               <select name="reference_number"  class="select2 form-control">
                                   <option value="" selected disabled>Select Reference</option>
                                   @forelse($referenceNumbers as $referenceNumber)
                                       <option {{$referenceNumber == request()->input('reference_number') ? 'selected':''}} value="{{$referenceNumber}}">{{$referenceNumber}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-2">
                               <select name="province" id="province" class="form-control select2 ">
                                   <option value="">Select Province</option>
                                   <option value="Mallorca">Mallorca</option>
                                   <option value="Ibiza">Ibiza</option>
                                   <option value="Menorca">Menorca</option>
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="district" id="district" class="form-control select2">
                                   <option value="">Select District</option>
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="city" id="city" class="form-control select2">
                                   <option value="">Select City</option>
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="room"  class="select2 form-control">
                                   <option value="" selected disabled>Select Bedrooms</option>
                                   @for($i = 1;$i < 21;$i++)
                                       <option {{$i == request()->input('room') ? 'selected':''}} value="{{$i}}">{{$i}}</option>
                                   @endfor
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="owner_name"  class="select2 form-control">
                                   <option value="" selected disabled>Select Owner</option>
                                   @forelse($owners as $owner)
                                       <option {{$owner ==request()->input('owner_name') ? 'selected':''}} value="{{$owner}}">{{$owner}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="property_type"  class="select2 form-control">
                                   <option value="" selected disabled>Type of Property</option>
                                   @forelse($types as $type)
                                       <option {{$type->id ==request()->input('property_type') ? 'selected':''}} value="{{$type->id}}">{{$type->name}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="property_status"  class="select2 form-control">
                                   <option value="" selected disabled>Property Status</option>
                                   @forelse($status as $s)
                                       <option {{$s->id ==request()->input('property_status') ? 'selected':''}} value="{{$s->id}}">{{$s->name}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2">
                               <select name="price"  class="select2 form-control">
                                   <option value="" selected disabled>Price</option>
                                   @forelse($prices as $price)
                                       <option {{$price ==request()->input('price') ? 'selected':''}} value="{{$price}}">{{$price}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>
                           <div class="form-group col-sm-12 col-lg-2 text-right">
                               <button type="submit" class="btn btn-success" style="padding: .375rem 0.4rem;"><i class="fa fa-search-plus fa-fw"></i>Search</button>
                               <a href="{{route('admin.property.index')}}" class="btn btn-info" style="color: #fff;padding: .375rem 0.4rem;"><i class="fa fa-recycle fa-fw"></i>Reset</a>
                           </div>
                       </div>
                    </form>
                    <div class="custom-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr style="text-align: center">
                                <th style="width: 5%">#</th>
                                <th style="width: 25%;">Image</th>
                                <th>Title</th>
                                <th style="width: 15%">Type</th>
                                <th style="width: 12%">Date</th>
                                <th style="width: 12%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($properties as $property)
                                <tr>
                                    <td>@if($loop->index + 1 <10){{'0'.($loop->index+1)}}@endif @if($loop->index + 1 > 9){{($loop->index+1)}}@endif</td>
                                    <td>
                                        <img style="width: 100%;max-height:180px;" src="{{asset('storage/'.$property->feature_image)}}" alt="">
                                    </td>
                                    <td>
                                        <a class="d-block" target="_blank" href="{{route('properties.details',['id'=>$property->id,'slug'=>$property->slug])}}">{{$property->title}}</a>
                                        <span class="d-block">Reference Number: {{$property->reference_number}}</span>
                                        <span class="d-block">Number of bedrooms: {{$property->room}}</span>
                                        <span class="d-block">Number of bathrooms: {{$property->bathroom}}</span>
                                        <span class="d-block">Price : {{$property->symbol.number_format($property->price)}}</span>
                                        <span class="d-block">Area : {{$property->land_area}}</span>
                                        <span class="d-block">Owner Name : {{$property->owner_name ? :''}}</span>
                                    </td>
                                    <td>
                                        @php
                                            $types = explode(',',$property->property_type);
                                        @endphp
                                        @foreach($types as $type)
                                            {!! \App\Helper\Helper::getPropertyTypeNameById($type) !!}
                                        @endforeach
                                    </td>
                                    <td>{{\Carbon\Carbon::parse($property->created_at)->isoFormat('Do, MM YYYY')}}</td>
                                    <td>
                                        @if($property->post_status == 'Active')
                                            <form id="change-{{$property->id}}" action="{{route('admin.property.status.change')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{$property->id}}">
                                                <input type="hidden" name="status" value="Inactive">
                                            </form>
                                            <a href="" onclick="changeStatusInactive({{$property->id}})" class="btn btn-success mb-1"><i class="fa fa-eye-slash"></i></a>
                                        @else
                                            <form id="change-{{$property->id}}" action="{{route('admin.property.status.change')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="Active">
                                                <input type="hidden" name="post_id" value="{{$property->id}}">
                                            </form>
                                            <a href="" onclick="changeStatusActive({{$property->id}})" class="btn btn-success mb-1"><i class="fa fa-eye"></i></a>
                                        @endif
                                        <a href="{{route('admin.property.note',['id'=>$property->id])}}" class="mb-1 btn btn-info"><i class="fa fa-list"></i></a>
                                        <a href="{{route('admin.property.edit',['id'=>$property->id,'slug'=>$property->slug])}}" class="btn btn-primary mb-1"><i class="fa fa-edit"></i></a>
                                        <form class="d-none" id="delete-{{$property->id}}" action="{{route('admin.property.delete')}}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$property->id}}">
                                        </form>
                                        <a href="" onclick="deleteProperty({{$property->id}})" class="btn btn-danger mb-1"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="text-align: center" colspan="6">No Result Found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="display: flex;flex-direction: row-reverse;margin-right: 20px;">
                    {{$properties->appends(\request()->input())->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <style>
        table tbody tr td{
            vertical-align: middle!important;
        }
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

        @media (max-width: 991px) {
            .custom-responsive{
                overflow: hidden;
                overflow-x: scroll;
            }
            .custom-responsive table{
                width: 1000px;
            }
        }
    </style>
@endpush
@push('js')
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.select2').select2();
        $('#province').on('change',function (){
            var value = $(this).val();
            var url= '{{route('get.district',['name'=>':name'])}}';
            url = url.replace(':name',value);
            $.ajax({
                url:url,
                method:'GET',
                success:function (response){
                    $('#city').empty();
                    $('#city').html('<option value="">Select City</option>');
                    $('#district').empty();
                    $('#district').html(response);
                    $('.select2').select2()
                }
            });
        });
        $('#district').on('change',function () {
            var value = $(this).val();
            var url= '{{route('get.city',['name'=>':name'])}}';
            url = url.replace(':name',value);
            $.ajax({
                url:url,
                method:'GET',
                success:function (response){
                    $('#city').empty();
                    $('#city').html(response);
                    $('.select2').select2()
                }
            });
        })
        function deleteProperty(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to delete your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-'+id).submit();
                }
            })
        }
        function changeStatusActive(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to Publish your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Publish it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#change-'+id).submit();
                }
            })
        }
        function changeStatusInactive(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You you want to Draft your property!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Draft it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#change-'+id).submit();
                }
            })
        }
    </script>
@endpush
