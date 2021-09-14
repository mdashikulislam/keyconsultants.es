@extends('frontend.layouts.inner-master')
@section('breadcumb-title')
    Online Tax Return
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wizard-content">
                            <form id="example-form" action="#" class="tab-wizard wizard-circle wizard clearfix">
                                <h6>General information</h6>
                                <section class="pb-3">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <div class="base">
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <h4 class="d-flex justify-content-between">Owner 1</h4>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label >First name </label>
                                                        <input required  name="first_name[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="last_name">Last name </label>
                                                        <input required id="last_name" name="last_name[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="nie">Spanish NIE Number</label>
                                                        <input required id="nie" name="nie[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="dob">Date of birth</label>
                                                        <input required id="dob" name="dob[1]" type="date" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="address">Address in your home country</label>
                                                        <input required id="address" name="address[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="city">City</label>
                                                        <input required id="city" name="city[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="zip">Postal/Zip Code</label>
                                                        <input required id="zip" name="zip[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="country">Country</label>
                                                        <select required name="country[1]" id="country" class="form-control">
                                                            <option value="">Select Country</option>
                                                            <option value="Afganistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bonaire">Bonaire</option>
                                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Canary Islands">Canary Islands</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Channel Islands">Channel Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Island">Cocos Island</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaco">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="India">India</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea North">Korea North</option>
                                                            <option value="Korea Sout">Korea South</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Midway Islands">Midway Islands</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Nambia">Nambia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                            <option value="Nevis">Nevis</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau Island">Palau Island</option>
                                                            <option value="Palestine">Palestine</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Phillipines">Philippines</option>
                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                            <option value="St Eustatius">St Eustatius</option>
                                                            <option value="St Helena">St Helena</option>
                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                            <option value="St Lucia">St Lucia</option>
                                                            <option value="St Maarten">St Maarten</option>
                                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                            <option value="Saipan">Saipan</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="Samoa American">Samoa American</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Tahiti">Tahiti</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                            <option value="United States of America">United States of America</option>
                                                            <option value="Uraguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City State">Vatican City State</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                            <option value="Wake Island">Wake Island</option>
                                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <p>If your tax residence in in other country than your home adress please notify.</p>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="ownership">Ownership in %</label>
                                                        <input required id="ownership" name="ownership[1]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="place_of_birth">Place of birth and country</label>
                                                        <input required id="place_of_birth" name="place_of_birth[1]" type="text" class="form-control ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="add-data">

                                            </div>
                                            <button id="add-owner" type="button" class="btn btn-success">Add Owner</button>
                                        </div>
                                    </div>
                                </section>
                                <h6>The property in Spain</h6>
                                <section class="pb-3">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-lg-8 col-12">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <p>Here you will present information about the property in Spain. If you do not know a specific detail, please leave the part of the form unfilled. </p>
                                                    <p>The information requested below can be found in your IBI-payment, which the municipality send you on a yearly basis to your spanish address.</p>
                                                    <p>You can also choose to upload a photo or a scanned copy of your IBI-payment and you will not have to fill in the forms on this page and can proceed to next page.</p>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label class="d-block">I choose to upload a photo of my IBI-payment</label>
                                                    <div class="form-check d-inline mr-3">
                                                        <input checked class="form-check-input" type="radio" name="ibi_payment" id="exampleRadios1" value="Yes">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" name="ibi_payment" id="exampleRadios2" value="No">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            I would rather fill in the details myself
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 radio-change">
                                                    <label>Please make sure that the photo is readable</label>
                                                    <input required type="file" name="ibi_file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h6>Account details</h6>
                                <section class="pb-3">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-lg-8 col-12">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label for="iban_code">IBAN-code (account number) at your spanish bank</label>
                                                    <input required id="iban_code" type="text" class="form-control" name="iban_code" placeholder="Your tax will deducted from this account">
                                                </div>
                                                <div class="form-group col-12">
                                                    <p>We will never have access to your bank account. You will pay our fee with a debit/credit card.</p>
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-12">
                                                    <label for="whole_tax_year">Have you owned the property the whole tax year?
                                                    </label>
                                                    <select name="whole_tax_year" id="whole_tax_year" class="form-control">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-12">
                                                    <label for="rental_year">Have you had the property for rental during the year?
                                                    </label>
                                                    <select name="rental_year" id="rental_year" class="form-control">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <div class="whole_tax_year_append">

                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label class="d-block">I want to declare tax year</label>
                                                    <div class="form-check d-inline mr-3">
                                                        <input class="form-check-input" type="checkbox" name="tax_year[]" value="2020" id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            2020
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline mr-3">
                                                        <input class="form-check-input" type="checkbox" name="tax_year[]" value="2019" id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            2019
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline mr-3">
                                                        <input class="form-check-input" type="checkbox" name="tax_year[]" value="2018" id="flexCheckDefault3">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            2018
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline mr-3">
                                                        <input class="form-check-input" type="checkbox" name="tax_year[]" value="2017" id="flexCheckDefault4">
                                                        <label class="form-check-label" for="flexCheckDefault4">
                                                            2017
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline mr-3">
                                                        <input class="form-check-input" type="checkbox" name="tax_year[]" value="2016" id="flexCheckDefault5">
                                                        <label class="form-check-label" for="flexCheckDefault5">
                                                            2016
                                                        </label>
                                                    </div>
                                                    <p class="d-block mt-3">The tax is always declared the year after the tax year, meaning during 2021 the tax is declared for tax year 2020. Please do note that our fee in this form is calculated just for one tax year. If you wish to declare several years the additional years will be paid separately.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h6>Present your taxes and make payment</h6>
                                <section class="pb-3">

                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <style>
        span.error-message{
            min-height: 25px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 4px 10px;
            width: 100%;
            color: #f44336;
            background: rgba(244, 67, 54, 0.2);
            font-size: 12px;
            line-height: 14px;
            border-radius: 2px;
            margin-top: 1px;
        }
        .panel {
            border:1px solid #fff;
            border-radius:10px;
            background-color:#fff;
            box-shadow:0px 1px 3px #ccc;
        }
        .wizard-content .wizard>.steps>ul>li:after,
        .wizard-content .wizard>.steps>ul>li:before {
            content: '';
            z-index: 9;
            display: block;
            position: absolute
        }

        .wizard-content .wizard {
            width: 100%;
            overflow: hidden
        }

        .wizard-content .wizard .content {
            margin-left: 0!important
        }

        .wizard-content .wizard>.steps {
            position: relative;
            display: block;
            width: 100%
        }

        .wizard-content .wizard>.steps .current-info {
            position: absolute;
            left: -99999px
        }

        .wizard-content .wizard>.steps>ul {
            display: table;
            width: 100%;
            table-layout: fixed;
            margin: 0;
            padding: 0;
            list-style: none
        }

        .wizard-content .wizard>.steps>ul>li {
            display: table-cell;
            width: auto;
            vertical-align: top;
            text-align: center;
            position: relative
        }

        .wizard-content .wizard>.steps>ul>li a {
            position: relative;
            padding-top: 52px;
            margin-top: 20px;
            margin-bottom: 20px;
            display: block
        }

        .wizard-content .wizard>.steps>ul>li:before {
            left: 0
        }

        .wizard-content .wizard>.steps>ul>li:after {
            right: 0
        }

        .wizard-content .wizard>.steps>ul>li:first-child:before,
        .wizard-content .wizard>.steps>ul>li:last-child:after {
            content: none
        }

        .wizard-content .wizard>.steps>ul>li.current>a {
            color: #2f3d4a;
            cursor: default
        }

        .wizard-content .wizard>.steps>ul>li.current .step {
            border-color: #c0b298 ;
            background-color: #fff;
            color: #c0b298
        }

        .wizard-content .wizard>.steps>ul>li.disabled a,
        .wizard-content .wizard>.steps>ul>li.disabled a:focus,
        .wizard-content .wizard>.steps>ul>li.disabled a:hover {
            color: #999;
            cursor: default
        }

        .wizard-content .wizard>.steps>ul>li.done a,
        .wizard-content .wizard>.steps>ul>li.done a:focus,
        .wizard-content .wizard>.steps>ul>li.done a:hover {
            color: #999
        }

        .wizard-content .wizard>.steps>ul>li.done .step {
            background-color: #c0b298 ;
            border-color: #c0b298 ;
            color: #fff
        }

        .wizard-content .wizard>.steps>ul>li.error .step {
            border-color: #f62d51;
            color: #f62d51
        }

        .wizard-content .wizard>.steps .step {
            background-color: #fff;
            display: inline-block;
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -24px;
            z-index: 10;
            text-align: center
        }

        .wizard-content .wizard>.content {
            overflow: hidden;
            position: relative;
            width: auto;
            padding: 0;
            margin: 0
        }

        .wizard-content .wizard>.content>.title {
            position: absolute;
            left: -99999px
        }

        .wizard-content .wizard>.content>.body {
            padding: 0 20px
        }

        .wizard-content .wizard>.content>iframe {
            border: 0;
            width: 100%;
            height: 100%
        }

        .wizard-content .wizard>.actions {
            position: relative;
            display: block;
            text-align: right;
            padding: 0 20px 20px
        }

        .wizard-content .wizard>.actions>ul {
            float: right;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .wizard-content .wizard>.actions>ul:after {
            content: '';
            display: table;
            clear: both
        }

        .wizard-content .wizard>.actions>ul>li {
            float: left
        }

        .wizard-content .wizard>.actions>ul>li+li {
            margin-left: 10px
        }

        .wizard-content .wizard>.actions>ul>li>a {
            background: #c0b298 ;
            color: #fff;
            display: block;
            padding: 7px 12px;
            border-radius: 4px;
            border: 1px solid transparent
        }

        .wizard-content .wizard>.actions>ul>li>a:focus,
        .wizard-content .wizard>.actions>ul>li>a:hover {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset
        }

        .wizard-content .wizard>.actions>ul>li>a:active {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"] {
            background-color: #fff;
            color: #54667a;
            border: 1px solid #d9d9d9
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:focus,
        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:hover {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset
        }

        .wizard-content .wizard>.actions>ul>li>a[href="#previous"]:active {
            -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset;
            box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset
        }

        .wizard-content .wizard>.actions>ul>li.disabled>a,
        .wizard-content .wizard>.actions>ul>li.disabled>a:focus,
        .wizard-content .wizard>.actions>ul>li.disabled>a:hover {
            color: #999
        }

        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"],
        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus,
        .wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .wizard-content .wizard.wizard-circle>.steps>ul>li:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li:before {
            top: 45px;
            width: 50%;
            height: 3px;
            background-color: #c0b298
        }

        .wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,
        .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before {
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-circle>.steps .step {
            width: 50px;
            height: 50px;
            line-height: 45px;
            border: 3px solid #F3F3F3;
            font-size: 1.3rem;
            border-radius: 50%
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li:before {
            top: 39px;
            width: 50%;
            height: 2px;
            background-color: #c0b298
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current .step {
            border: 2px solid #c0b298 ;
            color: #c0b298 ;
            line-height: 36px
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current .step:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.done .step:after {
            border-top-color: #c0b298
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.current:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:after,
        .wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:before {
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-notification>.steps>ul>li.done .step {
            color: #FFF
        }

        .wizard-content .wizard.wizard-notification>.steps .step {
            width: 40px;
            height: 40px;
            line-height: 40px;
            font-size: 1.3rem;
            border-radius: 15%;
            background-color: #F3F3F3
        }

        .wizard-content .wizard.wizard-notification>.steps .step:after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            bottom: 0;
            left: 50%;
            margin-left: -8px;
            margin-bottom: -8px;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 8px solid #F3F3F3
        }

        .wizard-content .wizard.vertical>.steps {
            display: inline;
            float: left;
            width: 20%
        }

        .wizard-content .wizard.vertical>.steps>ul>li {
            display: block;
            width: 100%
        }

        .wizard-content .wizard.vertical>.steps>ul>li.current:after,
        .wizard-content .wizard.vertical>.steps>ul>li.current:before,
        .wizard-content .wizard.vertical>.steps>ul>li.current~li:after,
        .wizard-content .wizard.vertical>.steps>ul>li.current~li:before,
        .wizard-content .wizard.vertical>.steps>ul>li:after,
        .wizard-content .wizard.vertical>.steps>ul>li:before {
            background-color: transparent
        }

        @media (max-width:768px) {
            .wizard-content .wizard>.steps>ul {
                margin-bottom: 20px
            }
            .wizard-content .wizard>.steps>ul>li {
                display: block;
                float: left;
                width: 50%
            }
            .wizard-content .wizard>.steps>ul>li>a {
                margin-bottom: 0
            }
            .wizard-content .wizard>.steps>ul>li:first-child:before {
                content: ''
            }
            .wizard-content .wizard>.steps>ul>li:last-child:after {
                content: '';
                background-color: #c0b298
            }
            .wizard-content .wizard.vertical>.steps {
                width: 15%
            }
        }

        @media (max-width:480px) {
            .wizard-content .wizard>.steps>ul>li {
                width: 100%
            }
            .wizard-content .wizard>.steps>ul>li.current:after {
                background-color: #c0b298
            }
            .wizard-content .wizard.vertical>.steps>ul>li {
                display: block;
                float: left;
                width: 50%
            }
            .wizard-content .wizard.vertical>.steps {
                width: 100%;
                float:none;
            }
        }
    </style>
@endpush
@push('js')
    <script src="{{asset('frontend/step/jquery.steps.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
    <script>
        $(document).on('change','#whole_tax_year',function (){
            $('.whole_tax_year_append').empty();
            if ($(this).val() == 'No'){
                $('.whole_tax_year_append').append(`<div class="row">
                                                            <div class="form-group col-12">
                                                                <label for="buy_the_property">When did you buy the property?</label>
                                                                <input required type="date" name="buy_the_property" class="form-control">
                                                            </div>
                                                        </div>`);
            }
        });
        $(document).on('change','input[name="ibi_payment"]',function (){
            $('.radio-change').empty();
            if ($(this).val() == 'Yes'){
                $('.radio-change').append(`<label>Please make sure that the photo is readable</label>
                                                    <input required type="file" name="ibi_file" class="form-control">`);
            }else{
                $('.radio-change').append(`<div class="row">
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >Address in Spain</label>
                                                            <input required type="text" class="form-control" name="address_in_spain">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >City</label>
                                                            <input required type="text" class="form-control" name="city_2">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >State / Province / Region</label>
                                                            <input required type="text" class="form-control" name="state_2">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >Postal / Zip Code</label>
                                                            <input required type="text" class="form-control" name="postal_2">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >Catastral reference</label>
                                                            <input required type="text" class="form-control" name="catastral_reference">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-12">
                                                            <label >Catastral value in euro</label>
                                                            <input required type="text" class="form-control" name="catastral_value_in_euro">
                                                        </div>
                                                    </div>`);
            }
        })
        $(document).on('click','.remove',function (){
            event.preventDefault();
            $(this).closest('div.row').empty();
        })
        var i =1;
        $(document).on('click','#add-owner',function (){
            event.preventDefault();
            i++;
            $('#add-data').append(`<div class="row">
                                                    <div class="form-group col-12 mt-3">
                                                        <h4 class="d-flex justify-content-between">Owner ${i} <a href="#" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i></a></h4>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label >First name </label>
                                                        <input required  name="first_name[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="last_name">Last name </label>
                                                        <input required id="last_name" name="last_name[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="nie">Spanish NIE Number</label>
                                                        <input required id="nie" name="nie[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="dob">Date of birth</label>
                                                        <input required id="dob" name="dob[${i}]" type="date" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="address">Address in your home country</label>
                                                        <input required id="address" name="address[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="city">City</label>
                                                        <input required id="city" name="city[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="zip">Postal/Zip Code</label>
                                                        <input required id="zip" name="zip[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="country">Country</label>
                                                        <select required name="country[${i}]" id="country" class="form-control">
                                                            <option value="">Select Country</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <p>If your tax residence in in other country than your home adress please notify.</p>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="ownership">Ownership in %</label>
                                                        <input required id="ownership" name="ownership[${i}]" type="text" class="form-control ">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                                        <label for="place_of_birth">Place of birth and country</label>
                                                        <input required id="place_of_birth" name="place_of_birth[${i}]" type="text" class="form-control ">
                                                    </div>
                                                </div>`);
        })
        var form = $("#example-form");
        form.steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // form.validate().settings.ignore = ":disabled,:hidden";
                // return form.valid();
                return true;
            },
        }).validate({
            errorElement: 'span',
            errorClass: 'error-message',
            rules:{
                'first_name[]':{
                    required:true
                },
                'last_name[]':{
                    required:true
                },
                'nie[]':{
                    required:true
                },
                'dob[]':{
                    required:true
                },
                'address[]':{
                    required:true
                },
                'city[]':{
                    required:true
                },
                'zip[]':{
                    required:true
                },
                'country[]':{
                    required:true
                },
                'ownership[]':{
                    required:true
                },
                'place_of_birth[]':{
                    required:true
                },
            },
            checkForm: function() {
                this.prepareForm();
                for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
                    if (this.findByName(elements[i].name).length != undefined && this.findByName(elements[i].name).length > 1) {
                        for (var cnt = 0; cnt < this.findByName(elements[i].name).length; cnt++) {
                            this.check(this.findByName(elements[i].name)[cnt]);
                        }
                    } else {
                        this.check(elements[i]);
                    }
                }
                return this.valid();
            }
        });
    </script>
@endpush
