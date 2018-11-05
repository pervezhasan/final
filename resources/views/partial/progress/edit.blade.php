@extends('layouts.app')
@section('content')
                <div class="row">
                    <div class="col-12">
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body" style="overflow:auto">
                            
                              
                                <table class="table table-striped table-bordered" id="editable-datatables">
                                    <thead>
                                        <tr>
                                        	<th data-field="sl" ></th>
                                            <th data-field="country">Country Name</th>
                                            <th data-field="zipcode">Country Zip Code</th>
                                            <th data-field="propertytype">Property Type</th>
                                            <th data-field="numberofproperty">Number of Property</th>
                                            <th data-field="own_or_rent">Property Own/Rent</th>
                                            <th data-field="single_apartment_mobile">Single/Apartment/Mobile Home</th>
                                            <th data-field="detached_attached">If Single Detached/Attached</th>
                                            <th data-field="4_unit_or_more">If Apartment 4 Unit/More Building</th>
                                            <th data-field="year_build">Year Build</th>
                                            <th data-field="square_footage">Square Footage</th>
                                            <th data-field="serviceyear">Service Year</th>
                                           
                                            
                                        </tr>
                                        </thead>
                                         
                                </table>
                                @foreach($property as $property)
                                <form method="POST" action="{{ action('PropertyController@update', $property->id) }} " id="edit_form">  
                                	<table>
                                    	
                                           
                                        <tbody>
                                           
                                            <tr>
                
                                                
                                                
                                                <td >{{ $property->id }}</td>
                                                <td>
                                                <select class="selectpicker inputactivs" name="country" title="{{ $property->country }}" onclick="RemoveDisa()" disabled>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antartica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
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
                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France, Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Span">Spain</option>
                                                    <option value="SriLanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                </td>
                                                <td><input class=" inputactivs form-control" type="text" name="zipcode" value="{{ $property->zipcode }}" disabled /></td>
                                                <td>
                                                <select name="powertype" disabled class="inputactivs selectpicker" title="{{ $property->powertype }}">
                                                    <option value="Individual">Individual</option>
                                                    <option value="Organization" >Organization</option>
                                                    <option value="Government" >Government</option>
                                                </select>
                                                </td>
                                                <td><input type="number" name="numberindividusalhousehold" value="{{ $property->numberindividusalhousehold }}" class=" inputactivs form-control" disabled /></td>
                                                <td>
                                                    <select class=" inputactivs selectpicker" title="{{ $property->own_or_rent }}" name="own_or_rent" disabled>
                                                        <option value="Own">Own</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                
                                                </td>
                                                <td>
                                                    <select class="inputactivs selectpicker" title="{{ $property->single_or_apartment_or_mobilehome }}" name="single_or_apartment_or_mobilehome" disabled>
                                                        <option value="Single">Single</option>
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Mobilehome">Mobilehome</option>
                                                    </select>
                                                </td> 
                                                <td name="single_detached_or_attached">
                                                    
                                                    <select name="single_detached_or_attached" class="inputactivs selectpicker" title="{{ $property->single_detached_or_attached }}" disabled>
                                                        <option value="Detached">Detached</option>
                                                        <option value="Mobilehome">Mobilehome</option>
                                                    </select>
                                                </td>
                                                <td name="apartment_4_unit_or_5_building" >
                                                    <select name="apartment_4_unit_or_5_building" class="inputactivs selectpicker" title="{{ $property->apartment_4_unit_or_5_building }}" disabled>
                                                        <option value="2-4-unit">2-4-unit</option>
                                                        <option value=" &gt; 5 building"> &gt; 5 building</option>
                                                    </select>
                                                
                                                </td>
                                                <td>
                                                    <select name="serviceyear"  class="inputactivs selectpicker" title="{{ $property->year_build }}" disabled></select>
                                                </td> 
                                                <td onclick="RemoveDisa()"><input  type="text" class="inputactivss form-control"name="square_footage" value="{{ $property->square_footage }}" disabled /></td>
                                                <td><input type="text" class="inputactivs form-control" name="serviceyear" value="{{ $property->serviceyear }}" maxlength="4" disabled /></td>
                                             
                                            </tr>
                                            <tr>
                                                <td colspan="12">
                                                     <table>
                                                        <tbody>
                                                            <tr>
                                                            <th>&nbsp; </th>
                                                            <th>
                                                            <select name="powerusedelectricity" class="inputactivs selectpicker" title="{{ $property->powerusedelectricity }}" disabled />
                                                            <option value="MWh">MWh (Electricity)</option>
                                                                <option value="Gals">Gals (Electricity)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Electricity)</option>
                                                                <option value="Toe">Toe (Electricity)</option>
                                                            </select>
                                                            </th>
                                                            <th>
                                                            <select name="powerusednaturalgas" class="inputactivs selectpicker" title="{{ $property->powerusednaturalgas }}" disabled />
                                                                <option value="MWh">MWh (Natural Gas)</option>
                                                                <option value="Gals">Gals (Natural Gas)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Natural Gas)</option>
                                                                <option value="Toe">Toe (Natural Gas)</option>
                                                            </select>
                                                            </th>
                                                            <th>
                                                            <select name="powerusedpoeloilkarosane" class=" inputactivs selectpicker" title="{{ $property->powerusedpoeloilkarosane }}" disabled />
                                                                 <option value="MWh">MWh (Fuel oil or Kerosene)</option>
                                                                <option value="Gals">Gals (Fuel oil or Kerosene)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Fuel oil or Kerosene)</option>
                                                                <option value="Toe">Toe (Fuel oil or Kerosene)</option>
                                                            </select>
                                                            
                                                            </th>
                                                            <th>
                                                            <select name="powerusedwood" class=" inputactivs selectpicker" title="{{ $property->powerusedwood}}" disabled />
                                                                <option value="MWh">MWh (Wood)</option>
                                                                <option value="Gals">Gals (Wood)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Wood)</option>
                                                                <option value="Toe">Toe (Wood)</option>
                                                            </select>
                                                            
                                                            </th>
                                                            <th>
                                                            <select name="powerusedpropane" class=" inputactivs selectpicker" title="{{ $property->powerusedpropane}}" disabled />
                                                               <option value="MWh">MWh (Propane)</option>
                                                                <option value="Gals">Gals (Propane)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Propane)</option>
                                                                <option value="Toe">Toe (Propane)</option>
                                                            </select>
                                                            
                                                            </th>
                                                            <th>
                                                            <select name="powerusedwind" class=" inputactivs selectpicker" title="{{ $property->powerusedwind}}" disabled />
                                                                <option value="MWh">MWh (Wind)</option>
                                                                <option value="Gals">Gals (Wind)</option>
                                                                <option value="Cubic ft.">Cubic ft. (Wind)</option>
                                                                <option value="Toe">Toe (Wind)</option>
                                                            </select>
                                                            
                                                            </th>
                                                            <th>
                                                            <select name="powerusedhydro" class=" inputactivs selectpicker" title="{{ $property->powerusedhydro}}" disabled />
                                                            <option value="MWh">MWh (Hydro)</option>
                                                            <option value="Gals">Gals (Hydro)</option>
                                                            <option value="Cubic ft">Cubic ft. (Hydro)</option>
                                                            <option value="Toe">Toe (Hydro)</option>
                                                            </select>
                                                            </th>
                                                            <th>
                                                            <select name="powerusedbiomass" class=" inputactivs selectpicker" title="{{ $property->powerusedbiomass}}" disabled />
                                                            <option value="MWh">MWh (Biomass)</option>
                                                            <option value="Gals">Gals (Biomass)</option>
                                                            <option value="Cubic ft">Cubic ft. (Biomass)</option>
                                                            <option value="Toe">Toe (Biomass)</option>
                                                            </select>
                                                            </th>
                                                            <th>
                                                            <select name="powerusedtidal" class=" inputactivs selectpicker" title="{{ $property->powerusedtidal}}" disabled />
                                                            <option value="MWh">MWh (Tidal)</option>
                                                            <option value="Gals">Gals (Tidal)</option>
                                                            <option value="Cubic ft">Cubic ft. (Tidal)</option>
                                                            <option value="Toe">Toe (Tidal)</option>
                                                            </select>
                                                            </th>
                                                            <th>
                                                            <select name="powerusednuclear" class=" inputactivs selectpicker" title="{{ $property->powerusednuclear}}" disabled />
                                                            <option value="MWh">MWh (Nuclear)</option>
                                                            <option value="Gals">Gals (Nuclear)</option>
                                                            <option value="Cubic ft">Cubic ft. (Nuclear)</option>
                                                            <option value="Toe">Toe (Nuclear)</option>
                                                            </select>
                                                            </th>
                                                            </tr>
                                                            <tr>
                                                            <td>
                                                            Appliances
                                                            </td>
                                                            <td>
                                                            <input onclick="this.removeAttribute('disabled');" type="text" name="appliances_elec" value="{{ $property->appliances_elec }}" class=" inputactivs form-control"  disabled /> 
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_naturalgas" value="{{ $property->appliances_naturalgas }}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_fuelkarosane" value="{{ $property->appliances_fuelkarosane}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_wood" value="{{ $property->appliances_wood}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td >
                                                            <input type="text" name="appliances_propane" value="{{ $property->appliances_propane}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_wind" value="{{ $property->appliances_wind}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_hydro" value="{{ $property->appliances_hydro}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            
                                                            <td>
                                                            <input type="text" name="appliances_biomass" value="{{ $property->appliances_biomass}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_tidal" value="{{ $property->appliances_tidal}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            <td>
                                                            <input type="text" name="appliances_nuclear" value="{{ $property->appliances_nuclear}}" class=" inputactivs form-control"  disabled />
                                                            </td>
                                                            
                                                            </tr>
                                                            <tr>
                                                            <td>Electronics</td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_elec}}" name="electronics_elec" id="electronics_elec" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_naturalgas}}" name="electronics_naturalgas" id="electronics_naturalgas" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_fuelkarosane}}" name="electronics_fuelkarosane" id="electronics_fuelkarosane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_wood}}" name="electronics_wood" id="electronics_wood" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_propane}}" name="electronics_propane" id="electronics_propane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_wind}}" name="electronics_wind" id="electronics_wind" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_hydro}}" name="electronics_hydro" id="electronics_hydro" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_biomass}}" name="electronics_biomass" id="electronics_biomass" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_tidal}}" name="electronics_tidal" id="electronics_tidal" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->electronics_nuclear}}" name="electronics_nuclear" id="electronics_nuclear" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td>Lighting</td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_elec}}" name="lighting_elec" id="lighting_elec" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_naturalgas}}" name="lighting_naturalgas" id="lighting_naturalgas" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_fuelkarosane}}"  name="lighting_fuelkarosane" id="lighting_fuelkarosane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_wood}}" name="lighting_wood" id="lighting_wood" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_propane}}" name="lighting_propane" id="lighting_propane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_wind}}" name="lighting_wind" id="lighting_wind" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_hydro}}" name="lighting_hydro" id="lighting_hydro" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_biomass}}" name="lighting_biomass" id="lighting_biomass" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_tidal}}" name="lighting_tidal" id="lighting_tidal" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->lighting_nuclear}}" name="lighting_nuclear" id="lighting_nuclear" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td>Space heating</td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_elec}}" name="spaceheating_elec" id="spaceheating_elec" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_naturalgas}}" name="spaceheating_naturalgas" id="spaceheating_naturalgas" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_fuelkarosane}}" name="spaceheating_fuelkarosane" id="spaceheating_fuelkarosane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_wood}}" name="spaceheating_wood" id="spaceheating_wood" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_propane}}" name="spaceheating_propane" id="spaceheating_propane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_wind}}" name="spaceheating_wind" id="spaceheating_wind" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_hydro}}" name="spaceheating_hydro" id="spaceheating_hydro" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_biomass}}" name="spaceheating_biomass" id="spaceheating_biomass" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_tidal}}" name="spaceheating_tidal" id="spaceheating_tidal" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->spaceheating_nuclear}}" name="spaceheating_nuclear" id="spaceheating_nuclear" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td>Air Conditioning</td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_elec}}" name="airconditioning_elec" id="airconditioning_elec" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_naturalgas}}" name="airconditioning_naturalgas" id="airconditioning_naturalgas" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_fuelkarosane}}" name="airconditioning_fuelkarosane" id="airconditioning_fuelkarosane" class=" inputactivs form-control" disabled/>
                
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_wood}}" name="airconditioning_wood" id="airconditioning_wood" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_propane}}" name="airconditioning_propane" id="airconditioning_propane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_wind}}" name="airconditioning_wind" id="airconditioning_wind" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_hydro}}" name="airconditioning_hydro" id="airconditioning_hydro" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_biomass}}" name="airconditioning_biomass" id="airconditioning_biomass" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_tidal}}" name="airconditioning_tidal" id="airconditioning_tidal" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->airconditioning_nuclear}}" name="airconditioning_nuclear" id="airconditioning_nuclear" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                           
                                                            </tr>
                                                            <tr>
                                                            <td>Water Heating</td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_elec}}" name="waterheating_elec" id="waterheating_elec" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_naturalgas}}" name="waterheating_naturalgas" id="waterheating_naturalgas" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_fuelkarosane}}" name="waterheating_fuelkarosane" id="waterheating_fuelkarosane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_wood}}" name="waterheating_wood" id="waterheating_wood" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_propane}}" name="waterheating_propane" id="waterheating_propane" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_wind}}" name="waterheating_wind" id="waterheating_wind" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_hydro}}" name="waterheating_hydro" id="waterheating_hydro" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_biomass}}" name="waterheating_biomass" id="waterheating_biomass" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_tidal}}" name="waterheating_tidal" id="waterheating_tidal" class=" inputactivs form-control" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="{{ $property->waterheating_nuclear}}" name="waterheating_nuclear" id="waterheating_nuclear" class=" inputactivs form-control" disabled/></td>
                                                           
                                                            </tr>
                                                        
                                                        </tbody>
                                                        
                                                    </table>
                                               	</td>
                                                
                                                <td style="vertical-align:middle" rowspan="2">
                                                   <input type="hidden" name="_method" value="PATCH">
                                                {{ csrf_field() }}       
                                                 <a  id="editss" class="btn form-control" href="javascript:void(0)">Eidit</a> 
                                                 <a href="javascript:void(0)" class="inputactivs btn form-control">Delet</a>
                                                 <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                                                 </td>
                                            </tr>
                                      
                                    </tbody>
                                      
                                    </table>
                                    </form>
								 @endforeach 
                            </div>
                        </div>
                     </div>
    			</div>
                
                 <div class="row">
                    <div class="col-12">
                    	<div class="card">
                            <div class="card-body">
                            <div class="col-md-4 float-left">
                            &nbsp;
                            </div>
                            <div class="col-md-4 float-left">
                            	<div id="text-vichlel" style="border:1px solid #222222">
                                	<a href="{{route('vehicle-enter')}}" >I Have a Vehicle</a>
                            	</div>
                            </div>
                            <div class="col-md-4 float-left">
                            &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                 @else
        <div class="row">
                    <div class="col-12">
                    	<div class="card">
                            <div class="card-body">
                            <div class="col-md-4 float-left">
                            &nbsp;
                            </div>
                            <div class="col-md-4 float-left">
                            	<div id="text-vichlel" style="border:1px solid #222222">
                                	No data to show <a href="{{route('enter')}}" class="enter-now"> Enter now</a>
                            	</div>
                            </div>
                            <div class="col-md-4 float-left">
                            &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    @endif
  <style>
  	#edit_form input{
		max-width:80px;
	}
	#edit_form btn.dropdown-toggle.disabled.bs-placeholder.btn-default{
	}
  </style>
    <script>
	function RemoveDisa(){
	$('.inputactivss').removeAttr('disabled');
	}

		/*function activeAllDS(){
			$('.inputactivs').attr('disabled',false); 
			 $(".inputactivs").prop('disabled', function (_, val) { return ! val; });
		}*/
	/*$("#edit").click(function(event){
    event.preventDefault();
    $(".inputactivs").prop('disabled', function (_, val) { return ! val; });
});*/
    	function update(id){
			var  property = $("#"+id).html();
			
			/*jQuery.ajax({
                  url: "{{ url('/updates') }}",
                  method: 'post',
                  data: {
                     country: jQuery('#country').val(),
      
                  },
                  success: function(result){
                     console.log(result);
                  }});*/
            
			   
			$.ajax({
			type:"POST",
			url:'{{URL::to("updates")}}',
			data:{
				property: property,
				id:id,
				_token: $('#property_token').val()
			},
			datatype:'html',
			
			

		});
		success: function(result){
                     console.log(result);
                  }
		}
    </script>
@endsection