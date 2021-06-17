@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contact Us Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 20%">Name</th>
                            <th style="width: 20%">Email</th>
                            <th style="width: 20%">Subject</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($contacts as $contact)
                        <tr>
                            <td>@if($loop->index + 1 <10){{'0'.($loop->index+1)}}@endif @if($loop->index + 1 > 9){{($loop->index+1)}}@endif</td>
                            <td>{{$contact->name}}</td>
                            <td>
                                <a href="mailto:{{$contact->email}}">
                                    {{$contact->email}}
                                </a>
                            </td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                        </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>


                <div style="display: flex;flex-direction: row-reverse;margin-right: 20px;">
                    {{$contacts->links('vendor.pagination.bootstrap-4')}}
                </div>

            </div>
        </div>
    </div>
@endsection
