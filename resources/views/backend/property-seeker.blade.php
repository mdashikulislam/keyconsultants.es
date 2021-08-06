@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Property Seeker</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                     <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-condensed table-bordered">
                                 <thead>
                                    <tr>
                                        <th style="width: 5%"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @forelse($seekers as $seeker)
                                    <tr data-toggle="collapse" data-target="#colps-{{$seeker->id}}" class="accordion-toggle">
                                        <td><button class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button></td>
                                        <td>{{$seeker->name}}</td>
                                        <td>{{$seeker->email}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse" id="colps-{{$seeker->id}}">
                                                @forelse($seeker->seeker_datas as $data)
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td style="width: 20%">Reference Number</td>
                                                                <td>{{$data->reference_no}}</td>
                                                                <td style="width: 20%">Province</td>
                                                                <td>{{$data->province}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>District</td>
                                                                <td>{{$data->district}}</td>
                                                                <td>City</td>
                                                                <td>{{$data->city}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Minimum Price</td>
                                                                <td>{{$data->min_price}}</td>
                                                                <td>Maximum Price</td>
                                                                <td>{{$data->max_price}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Minimum Bedroom</td>
                                                                <td>{{$data->min_bed}}</td>
                                                                <td>Maximum Bedroom</td>
                                                                <td>{{$data->max_bed}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Property Type</td>
                                                                <td>{{$data->type}}</td>
                                                                <td>Search Time</td>
                                                                <td>{{\Carbon\Carbon::parse($data->created_at)->isoFormat('Do, MM YY - H:SS A')}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                 </tbody>
                            </table>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
