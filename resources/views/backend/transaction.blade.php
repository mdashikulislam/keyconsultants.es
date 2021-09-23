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
                                <th>Trx ID</th>
                                <th>Form Type</th>
                                <th>Amount</th>
                                <th>Receipt Email</th>
                                <th>Receipt Contact</th>
                                <th>Balance Transaction</th>
                                <th>Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trxs as $trx)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$trx->trx_id}}</td>
                                    <td>{{$trx->form_type}}</td>
                                    <td>{{'€'.number_format($trx->amount,2)}}</td>
                                    <td>{{$trx->receipt_email}}</td>
                                    <td>{{$trx->receipt_number}}</td>
                                    <td>{{$trx->balance_transaction}}</td>
                                    <td><a target="_blank" class="btn btn-success" href="{{$trx->receipt_url}}">Receipt</a></td>
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
