@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Personal Details</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 50%"><strong>Your Surname : </strong>{{$data->surname}}</td>
                            <td ><strong>Your first name(s) : </strong>{{$data->first_name}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Surname at Birth (if different) : </strong>{{$data->surname_at_birth}}</td>
                            <td ><strong>Gender : </strong>{{$data->gender}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Date of Birth : </strong>{{\Carbon\Carbon::parse($data->dob)->isoFormat('Do, MMM YYYY')}}</td>
                            <td ><strong>NIE No : </strong>{{$data->nie}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Passport No : </strong>{{$data->passport}}</td>
                            <td ><strong>Country of issue : </strong>{{$data->country_of_issue}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Expiry date : </strong>{{$data->expiry_date}}</td>
                            <td ><strong>Country of Birth : </strong>{{$data->country_of_birth}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Nationality : </strong>{{$data->nationality}}</td>
                            <td><strong>Address : </strong>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Place of birth : </strong>{{$data->place_of_birth}}</td>
                            <td ><strong> Profession : </strong>{{$data->profession}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Contact telephone number : </strong>{{$data->telephone}}</td>
                            <td ><strong>Email Address : </strong>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Postcode : </strong>{{$data->postcode}}</td>
                            <td ><strong>Country : </strong>{{$data->country}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
