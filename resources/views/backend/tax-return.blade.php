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
                            <th>Email Id</th>
                            <th>Contact Number</th>
                            <th>Full Data</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($taxReturns as $tax)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$tax->contact_email}}</td>
                                    <td>{{$tax->contact_telephone}}</td>
                                    <td><a href="{{route('admin.tax.return.single',['id'=>$tax->id])}}" class="btn btn-success">View</a></td>
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
