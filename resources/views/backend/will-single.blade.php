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
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Family Details</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 50%"><strong>Full name of Mother : </strong>{{$data->mother_name}}</td>
                            <td><strong>Mother Living Status : </strong>{{$data->mother_living_status}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Full name of Father : </strong>{{$data->father_name}}</td>
                            <td><strong>Father Living Status : </strong>{{$data->father_living_status}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><strong>Marital Status : </strong>{{$data->marital_status}}</td>
                            <td><strong>How many times have you been married : </strong>{{$data->marriage_time}}</td>
                        </tr>
                    </table>
                    @if($data->marriage_time == 1)
                        <h2 class="card-title mb-3 mt-3">Current Marriage :</h2>
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>First Name : </strong>{{$data->current_spouse_first_name}}</td>
                                <td><strong>Surname : </strong>{{$data->current_spouse_surname}}</td>
                            </tr>
                            <tr>
                                <td><strong>Number Of children : </strong>{{$data->current_no_of_children}}</td>
                                <td><strong>Country : </strong>{{$data->current_marriage_country}}</td>
                            </tr>
                        </table>
                        @if(@(int)$data->current_no_of_children > 0)
                            <div class="row mt-3">
                                @for($p = 0;$p < (int)$data->current_no_of_children;$p++)
                                    <div class="col-md-4">
                                        <h2 class="card-title mb-3">Child {{$p+1}} :</h2>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><strong>First Name :</strong> {{$data->current_child_first_name[$p]}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Surname :</strong> {{$data->current_child_surname[$p]}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Child type :</strong> {{$data->current_child_type[$p]}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                @endfor
                            </div>
                        @endif
                    @endif
                    @if($data->marriage_time > 1)
                        <h2 class="card-title mb-3 mt-3">Current Marriage :</h2>
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>First Name : </strong>{{$data->current_spouse_first_name}}</td>
                                <td><strong>Surname : </strong>{{$data->current_spouse_surname}}</td>
                            </tr>
                            <tr>
                                <td><strong>Number Of children : </strong>{{$data->current_no_of_children}}</td>
                                <td><strong>Country : </strong>{{$data->current_marriage_country}}</td>
                            </tr>
                        </table>
                        @if(@(int)$data->current_no_of_children > 0)
                            <div class="row mt-3">
                                @for($p = 0;$p < (int)$data->current_no_of_children;$p++)
                                <div class="col-md-4">
                                    <h2 class="card-title mb-3">Child {{$p+1}} :</h2>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><strong>First Name :</strong> {{$data->current_child_first_name[$p]}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Surname :</strong> {{$data->current_child_surname[$p]}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Child type :</strong> {{$data->current_child_type[$p]}}</td>
                                        </tr>
                                    </table>
                                </div>
                                @endfor
                            </div>
                        @endif
                        @for($i = 1; $i < $data->marriage_time;$i++)
                            <h2 class="card-title mt-3 mb-3">Previous marriage {{$i}} :</h2>
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 50%"><strong>First Name : </strong>{{$data['previous_info']['previous_marriage_'.$i]['previous_spouse_first_name_'.$i]}}</td>
                                    <td><strong>Surname : </strong>{{$data['previous_info']['previous_marriage_'.$i]['previous_spouse_surname_'.$i]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Country : </strong>{{$data['previous_info']['previous_marriage_'.$i]['previous_marriage_country_'.$i]}}</td>
                                    <td><strong>Date of the marriage : </strong>{{$data['previous_info']['previous_marriage_'.$i]['date_of_marriage_'.$i]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Date the marriage ended : </strong>{{$data['previous_info']['previous_marriage_'.$i]['date_of_marriage_end_'.$i]}}</td>
                                    <td><strong>Date the marriage ended : </strong>{{$data['previous_info']['previous_marriage_'.$i]['date_of_marriage_end_'.$i]}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Number Of Child : </strong>{{$data['previous_info']['previous_marriage_'.$i]['previous_no_of_children_'.$i]}}</td>
                                    <td>
                                        @if(@(int)$data['previous_info']['previous_marriage_'.$i]['previous_no_of_children_'.$i] > 0)
                                            @for($j = 0;$j < (int)$data['previous_info']['previous_marriage_'.$i]['previous_no_of_children_'.$i];$j++)
                                                <h2 class="card-title mb-2">Child Info {{$j+1}} :</h2>
                                                <table class="table">
                                                    <tr>
                                                        <td><strong>Child Type :</strong> {{$data['previous_info']['previous_marriage_'.$i]['previous_marriage_child']['previous_child_type'][$i]}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>First Name :</strong> {{$data['previous_info']['previous_marriage_'.$i]['previous_marriage_child']['previous_child_first_name'][$i]}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Surname :</strong> {{$data['previous_info']['previous_marriage_'.$i]['previous_marriage_child']['previous_child_surname'][$i]}}</td>
                                                    </tr>
                                                </table>
                                            @endfor
                                        @endif
                                    </td>
                                </tr>
                            </table>
{{--                            <div style="width: 100%;height: 2px;background: red;display: block;margin-top: 10px;"></div>--}}
                        @endfor
                    @endif
                    <div class="mt-3">
                        <p><strong>Do you have any other children born outside of the aforementioned marriage(s)? : </strong>{{$data->have_other_child == 1 ? 'Yes':'No'}}</p>
                        @if($data->have_other_child == 1)
                            <p><strong>How many : </strong>{{$data->how_other_child}}</p>
                        @endif
                    </div>
                    @if($data->how_other_child > 0)
                        <div class="row mt-3">
                            @for($s = 0;$s < $data->how_other_child;$s++)
                                <div class="col-md-4">
                                    <h2 class="card-title mb-3">Child {{$s+1}} :</h2>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><strong>First Name :</strong> {{$data->other_child_first_name[$s]}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Surname :</strong> {{$data->other_child_surname[$s]}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Child type :</strong> {{$data->other_child_type[$s]}}</td>
                                        </tr>
                                    </table>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
