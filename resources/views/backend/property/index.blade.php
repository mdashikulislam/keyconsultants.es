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
                    <table class="table table-bordered">
                        <thead>
                        <tr style="text-align: center">
                            <th style="width: 5%">#</th>
                            <th style="width: 15%;">Image</th>
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
                                        <img style="width: 100%;height: auto" src="{{asset('storage/'.$property->feature_image)}}" alt="">
                                    </td>
                                    <td>{{$property->title}}</td>
                                    <td>
                                        @php
                                            $types = explode(',',$property->property_type)
                                        @endphp
                                        @foreach($types as $type)
                                            {!! \App\Helper\Helper::getPropertyTypeNameById($types) !!}
                                        @endforeach
                                    </td>
                                    <td>{{\Carbon\Carbon::parse($property->created_at)->isoFormat('Do, MM YYYY')}}</td>
                                    <td>
{{--                                        <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>--}}
                                        <form class="d-none" id="delete-{{$property->id}}" action="{{route('admin.property.delete')}}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$property->id}}">
                                        </form>
                                        <a href="" onclick="deleteProperty({{$property->id}})" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                    {{$properties->links('vendor.pagination.bootstrap-4')}}
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
    </script>
@endpush
