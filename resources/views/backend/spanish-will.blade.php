@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Transaction</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="example2">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>NIE No</th>
                            <th>Passport</th>
                            <th>Full Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($spanishWills as $will)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$will->first_name.' '.$will->surname}}</td>
                                <td>{{$will->gender}}</td>
                                <td>{{$will->nie}}</td>
                                <td>{{$will->passport}}</td>
                                <td><a href="{{route('admin.spanish.will.single',['id'=>$will->id])}}" class="btn btn-success">View</a></td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush
@push('js')
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script>
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
@endpush
