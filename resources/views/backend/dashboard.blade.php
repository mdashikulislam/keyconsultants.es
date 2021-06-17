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
    </div>
@endsection
