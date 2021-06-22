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
                            <th style="width: 15%">Name</th>
                            <th style="width: 20%">Email</th>
                            <th style="width: 20%">Subject</th>
                            <th>Message</th>
                            <th style="width: 5%">Action</th>
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
                            <td>
                                <a href="{{route('admin.contact.delete',['id'=>$contact->id])}}"  class="btn btn-danger mb-1 delete-btn"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center">No Result Found</td>
                            </tr>
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
