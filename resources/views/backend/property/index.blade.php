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
                        <div class="input-group mb-3">
                            <input value="{{request()->input('keyword') ? :''}}" type="text" class="form-control" name="keyword" placeholder="Search by Title, Owner Name, Reference Number, Bedrooms, Bathrooms, Price, City, Region, Land Area, Living Space">
                            <button type="submit" class="btn btn-success" style="border-radius: 0">Search</button>
                            <a href="{{route('admin.property.index')}}" class="btn btn-info" style="border-radius: 0;color: #fff;">Reset</a>
                        </div>
                    </form>
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
                <div style="display: flex;flex-direction: row-reverse;margin-right: 20px;">
                    {{$properties->appends(\request()->input())->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        table tbody tr td{
            vertical-align: middle!important;
        }
    </style>
@endpush
@push('js')
    <script>
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
