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
                            <th style="width: 20%">Name</th>
                            <th style="width: 20%">Email</th>
                            <th style="width: 20%">Phone</th>
                            <th>Question</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($enquiry as $query)
                            <tr>
                                <td>@if($loop->index + 1 <10){{'0'.($loop->index+1)}}@endif @if($loop->index + 1 > 9){{($loop->index+1)}}@endif</td>
                                <td>
                                    {{Str::limit(\App\Helper\Helper::getPropertyInfoById($query->post_id)->title)}}
                                </td>
                                <td>{{$query->name}}</td>
                                <td>
                                    {{$query->email}}
                                </td>
                                <td>{{$query->phone}}</td>
                                <td>{{$query->question}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center"></td>
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
