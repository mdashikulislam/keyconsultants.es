@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">General Info</h2>
                </div>
                <div class="card-body">
                    @php
                        $firstName = explode(',',$data->first_name);
                        $lastName = explode(',',$data->last_name);
                        $nie = explode(',',$data->nie);
                        $dob = explode(',',$data->dob);
                        $address = explode(',',$data->address);
                        $city = explode(',',$data->city);
                        $zip = explode(',',$data->zip);
                        $country = explode(',',$data->country);
                        $ownership = explode(',',$data->ownership);
                        $place_of_birth = explode(',',$data->place_of_birth);
                    @endphp
                    @for($i = 0; $i < $data->total_owner;$i++)
                    <h6 class="mt-3">Property Owner {{$i+1}}:</h6>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="width: 50%"><strong>First name</strong> : {{$firstName[$i]}}</td>
                                    <td><strong>Last name</strong> : {{$lastName[$i]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Spanish NIE Number </strong>: {{$nie[$i]}}</td>
                                    <td><strong>Date of birth </strong>: {{\Carbon\Carbon::parse($dob[$i])->isoFormat('Do, MMM YYYY')}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%"><strong>Address in your home Country </strong>: {{$address[$i]}}</td>
                                    <td><strong>City</strong> : {{$city[$i]}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%"><strong>Postal/Zip Code</strong> : {{$zip[$i]}}</td>
                                    <td><strong>Country </strong>: {{$country[$i]}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 50%"><strong>Percentage of Ownership </strong>: {{$ownership[$i]}}</td>
                                    <td><strong>Place and Country of birth </strong>: {{$place_of_birth[$i]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endfor
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="card-title"> Your property in Spain</h2>
                </div>
                <div class="card-body">
                    @if($data->ibi_payment =='Yes')
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-6 col-12">
                                <img style="width: 100%" src="{{asset('storage/'.$data->ibi_file)}}" alt="">
                                <a download="download" href="{{asset('storage/'.$data->ibi_file)}}" class="btn btn-success">Download</a>
                            </div>
                        </div>
                    @else
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 50%"><strong>Address in Spain </strong>: {{$data->address_in_spain}}</td>
                                <td><strong>City </strong>: {{$data->city_2}}</td>
                            </tr>
                            <tr>
                                <td style="width: 50%"><strong>State / Province / Region </strong>: {{$data->state_2}}</td>
                                <td><strong>Postal / Zip Code </strong>: {{$data->zip}}</td>
                            </tr>
                            <tr>
                                <td style="width: 50%"><strong>Catastral reference</strong> : {{$data->catastral_reference}}</td>
                                <td><strong>Catastral value in euro</strong> : {{$data->catastral_value_in_euro}}</td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Account details</h6>
                </div>
                <div class="card-body">
                    <p><strong>IBAN-code (account number) at your spanish bank : </strong>{{$data->iban_code}}</p>
                    <p><strong>Have you owned the property the whole tax year? </strong>{{$data->whole_tax_year}}</p>
                    @if($data->whole_tax_year == 'No')
                    <p><strong>When did you buy the property? </strong>{{$data->buy_the_property}}</p>
                    @endif
                    <p><strong>Have you had the property for rental during the year? </strong>{{$data->rental_year}}</p>
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 25%"><strong>I want to declare tax year :</strong></td>
                            <td>
                                @php
                                  $tax_year = explode(',',$data->tax_year);
                                    foreach ($tax_year as $taxYear){
                                      echo $taxYear;
                                      echo '<br>';
                                    }
                                @endphp
                            </td>
                        </tr>
                    </table>
                    <p><strong>Contact Email: </strong>{{$data->contact_email}}</p>
                    <p><strong>Contact Telephone: </strong>{{$data->contact_telephone}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
