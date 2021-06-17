@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{number_format($property)}}</h3>
                    <p>Properties</p>
                </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{number_format($activeProperty)}}</h3>

                    <p>Active Property</p>
                </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3 class="text-white">{{number_format($contact)}}</h3>
                    <p class="text-white">Contact Message</p>
                </div>
                <div class="icon">
                    <i class="ion ion-email-unread"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{number_format($enquiry)}}</h3>

                    <p>Enquiry</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clipboard"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card bg-gradient-success">
                <div class="card-header border-0">

                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                    </h3>
                    <!-- tools card -->
                    <div class="card-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">Add new event</a>
                                <a href="#" class="dropdown-item">Clear events</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#calendar').datetimepicker({
            format: 'L',
            inline: true
        })
    </script>
@endpush
