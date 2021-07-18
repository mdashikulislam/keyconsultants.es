@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enquiry Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th>Property</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 15%">Email</th>
                            <th style="width: 15%">Phone</th>
                            <th style="width: 15%">Query</th>
                            <th style="width:15% ">Question</th>
                            <th style="width:5% ">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($enquiry as $query)
                            <tr>
                                <td>@if($loop->index + 1 <10){{'0'.($loop->index+1)}}@endif @if($loop->index + 1 > 9){{($loop->index+1)}}@endif</td>
                                <td>
                                    <a target="_blank" href="{{route('properties.details',['id'=>\App\Helper\Helper::getPropertyInfoById($query->post_id)->id,'slug'=>\App\Helper\Helper::getPropertyInfoById($query->post_id)->slug])}}">
                                        {{Str::limit(\App\Helper\Helper::getPropertyInfoById($query->post_id)->title)}}
                                    </a>
                                </td>
                                <td>{{$query->name}}</td>
                                <td>
                                    <a href="mailto:{{$query->email}}">
                                        {{$query->email}}
                                    </a>

                                </td>
                                <td>
                                    <a href="callto:{{$query->phone}}">
                                        {{$query->phone}}
                                    </a>

                                </td>
                                <td>
                                    @php
                                    $queries = explode(',',$query->query);
                                    @endphp
                                    @if($queries)
                                        @foreach($queries as $q)
                                            <span class="d-block badge badge-success mb-1">{{$q}}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{$query->question}}</td>
                                <td>
                                    <a href="{{route('admin.enquiry.delete',['id'=>$query->id])}}"  class="btn btn-danger mb-1 delete-btn"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" style="text-align: center">No Result Found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div style="display: flex;flex-direction: row-reverse;margin-right: 20px;">
                    {{$enquiry->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <style>
        .table td, .table th{
            vertical-align: middle;
        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function (){
            $('.delete-btn').on('click',function (e){
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You you want to delete your Contact Message!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = $(this).attr('href');
                    }
                })
            })
        })
    </script>
@endpush
