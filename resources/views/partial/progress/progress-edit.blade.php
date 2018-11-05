@extends('layouts.app')
@section('content')
                <div class="row">
                    <div class="col-12">
               @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
					
                        <!-- Table -->
                        <div class="cards">
                            <div class="card-body" style="overflow:auto">
                                <div class="row">
                                <form method="POST" action="{{ action('PropertyController@update', $property->id) }} " id="edit_form">  
                                	
                                    	<table id="edittables" cellpadding="5">
                                        	<tbody>
                                        	<tr>
                                            	<td colspan="7"><div id="address-headding"><h2>Address</h2></div></td>
                                            </tr>
                                            <tr>
                                            	<td colspan="4">
                                                   <select class="selectpicker inputactivss" name="country" aria-required="true" title="Enter Your Contry" id="contryrequired" required >
                                                                <option value="" selected="selected">Enter Your Contry</option>
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
                                            	<td colspan="4"><input class="inputactivs form-control" type="text" name="zipcode" value="Zip Code Here"   /></td>
                                             </tr>
                                             <tr>
                                                <td colspan="3">
                                                <select name="powertype"  class="inputactivss selectpicker" title="Property Type" required>
                                                    <option value="Individual">Individual</option>
                                                    <option value="Organization" >Organization</option>
                                                    <option value="Government" >Government</option>
                                                </select>
                                               
                                                </td>
                                            	<td colspan="2"> 
                                                <input type="number" name="numberindividusalhousehold" value="" class="inputactivss form-control" placeholder="Number Of Property" required />
                                                </td>
                                                <td colspan="2">
                                                 <select class="inputactivss selectpicker" title="Add Property At" name="own_or_rent" required>
                                                        <option value="Own">Own</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                <select class="inputactivss selectpicker" title="Select your Property" name="single_or_apartment_or_mobilehome" required>
                                                        <option value="Single">Single</option>
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Mobilehome">Mobilehome</option>
                                                    </select>
                                               
                                                </td>
                                            	<td colspan="2">
                                                	 <select name="single_detached_or_attached" class="inputactivss selectpicker" title="If Sigle Select Type" >
                                                        <option value="Detached">Detached</option>
                                                        <option value="Attached">Attached</option>
                                                    </select>
                                                    
                                                </td>
                                                <td colspan="2">
                                                	  <select name="apartment_4_unit_or_5_building" class="inputactivss selectpicker" title="If Apartment Select Size" >
                                                        <option value="2-4-unit">2-4-unit</option>
                                                        <option value=" &gt; 5 building"> &gt; 5 building</option>
                                                    </select>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td colspan="3">
                                                    <select name="serviceyear"  class="inputactivss yearselect selectpicker" title="Year Build" required></select>
                                                </td> 
                                                <td colspan="3" onclick="RemoveDisa()"><input placeholder="Square Footage" type="text" class="inputactivss form-control"name="square_footage" value=""  required /></td>
                                                <td><input type="text" class="inputactivs form-control" name="serviceyear" value="" maxlength="4" placeholder="Service Year" required /></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><strong>Select Power Uesed</strong></td>
                                                <td><strong>Appliances</strong></td>
                                                <td><strong>Electronics</strong></td>
                                                <td><strong>Lighting</strong></td>
                                                <td><strong>Space heating</strong></td>
                                                <td><strong>Air Conditioning</strong></td>
                                                <td><strong>Water Heating</strong></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="powerusedelectricity" class="inputactivss selectpicker" title="Electricity">
                                                    <option value="MWh">MWh (Electricity)</option>
                                                    <option value="Gals">Gals (Electricity)</option>
                                                    <option value="Cubic ft.">Cubic ft. (Electricity)</option>
                                                    <option value="Toe">Toe (Electricity)</option>
                                                    </select>
                                                </td>
                                            <td>
                                            <input type="text" name="appliances_elec" value="{{ $property->appliances_elec }}" class=" inputactivs form-control"   /> 
                                                
                                            </td>
                                            <td><input type="text" value="{{ $property->electronics_elec}}" name="electronics_elec" id="electronics_elec" class=" inputactivs form-control" /></td>
                                            <td> <input type="text" value="{{ $property->lighting_elec}}" name="lighting_elec" id="lighting_elec" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->spaceheating_elec}}" name="spaceheating_elec" id="spaceheating_elec" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->airconditioning_elec}}" name="airconditioning_elec" id="airconditioning_elec" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->waterheating_elec}}" name="waterheating_elec" id="waterheating_elec" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="powerusednaturalgas" class="inputactivss selectpicker" title="Natural Gas">
                                                    <option value="MWh">MWh (Natural Gas)</option>
                                                    <option value="Gals">Gals (Natural Gas)</option>
                                                    <option value="Cubic ft.">Cubic ft. (Natural Gas)</option>
                                                    <option value="Toe">Toe (Natural Gas)</option>
                                                    </select>
                                                </td>
                                            	<td><input type="text" name="appliances_naturalgas" value="{{ $property->appliances_naturalgas }}" class=" inputactivs form-control"   /></td>
                                            	<td><input type="text" value="{{ $property->electronics_naturalgas}}" name="electronics_naturalgas" id="electronics_naturalgas" class=" inputactivs form-control" /></td>
                                            	<td> <input type="text" value="{{ $property->lighting_naturalgas}}" name="lighting_naturalgas" id="lighting_naturalgas" class=" inputactivs form-control" /></td>
                                            	<td><input type="text" value="{{ $property->spaceheating_naturalgas}}" name="spaceheating_naturalgas" id="spaceheating_naturalgas" class=" inputactivs form-control" /></td>
                                            	<td><input type="text" value="{{ $property->airconditioning_naturalgas}}" name="airconditioning_naturalgas" id="airconditioning_naturalgas" class=" inputactivs form-control" /></td>
                                            	<td> <input type="text" value="{{ $property->waterheating_naturalgas}}" name="waterheating_naturalgas" id="waterheating_naturalgas" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                            	<td>
                                                    <select name="powerusedpoeloilkarosane" class="inputactivss selectpicker" title="Fuel oil/Kerosene">
                                                        <option value="MWh">MWh (Fuel oil or Kerosene)</option>
                                                        <option value="Gals">Gals (Fuel oil or Kerosene)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Fuel oil or Kerosene)</option>
                                                        <option value="Toe">Toe (Fuel oil or Kerosene)</option>
                                                    </select>
                                                
                                                </td>
                                                <td><input type="text" name="appliances_fuelkarosane" value="{{ $property->appliances_fuelkarosane}}" class=" inputactivs form-control"   /></td>
                                                <td><input type="text" value="{{ $property->electronics_fuelkarosane}}" name="electronics_fuelkarosane" id="electronics_fuelkarosane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->lighting_fuelkarosane}}"  name="lighting_fuelkarosane" id="lighting_fuelkarosane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_fuelkarosane}}" name="spaceheating_fuelkarosane" id="spaceheating_fuelkarosane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_fuelkarosane}}" name="airconditioning_fuelkarosane" id="airconditioning_fuelkarosane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_fuelkarosane}}" name="waterheating_fuelkarosane" id="waterheating_fuelkarosane" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                            <td> 
                                                <select name="powerusedwood" class="inputactivss selectpicker" title="Wood">
                                                <option value="MWh">MWh (Wood)</option>
                                                <option value="Gals">Gals (Wood)</option>
                                                <option value="Cubic ft.">Cubic ft. (Wood)</option>
                                                <option value="Toe">Toe (Wood)</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="appliances_wood" value="{{ $property->appliances_wood}}" class=" inputactivs form-control"   /></td>
                                            <td> <input type="text" value="{{ $property->electronics_wood}}" name="electronics_wood" id="electronics_wood" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->lighting_wood}}" name="lighting_wood" id="lighting_wood" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->spaceheating_wood}}" name="spaceheating_wood" id="spaceheating_wood" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->airconditioning_wood}}" name="airconditioning_wood" id="airconditioning_wood" class=" inputactivs form-control" /></td>
                                            <td><input type="text" value="{{ $property->waterheating_wood}}" name="waterheating_wood" id="waterheating_wood" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                    <select name="powerusedpropane" class="inputactivss selectpicker" title="Propane">
                                                       <option value="MWh">MWh (Propane)</option>
                                                        <option value="Gals">Gals (Propane)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Propane)</option>
                                                        <option value="Toe">Toe (Propane)</option>
                                                    </select>
                                                </td>
                                                <td> <input type="text" name="appliances_propane" value="{{ $property->appliances_propane}}" class=" inputactivs form-control"   /></td>
                                                <td> <input type="text" value="{{ $property->electronics_propane}}" name="electronics_propane" id="electronics_propane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->lighting_propane}}" name="lighting_propane" id="lighting_propane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_propane}}" name="spaceheating_propane" id="spaceheating_propane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_propane}}" name="airconditioning_propane" id="airconditioning_propane" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_propane}}" name="waterheating_propane" id="waterheating_propane" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                   <select name="powerusedwind" class="inputactivss selectpicker" title="Wind">
                                                        <option value="MWh">MWh (Wind)</option>
                                                        <option value="Gals">Gals (Wind)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Wind)</option>
                                                        <option value="Toe">Toe (Wind)</option>
                                                    </select>
                                                </td>
                                                <td> <input type="text" name="appliances_wind" value="{{ $property->appliances_wind}}" class=" inputactivs form-control"   /></td>
                                                <td> <input type="text" value="{{ $property->electronics_wind}}" name="electronics_wind" id="electronics_wind" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->lighting_wind}}" name="lighting_wind" id="lighting_wind" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_wind}}" name="spaceheating_wind" id="spaceheating_wind" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_wind}}" name="airconditioning_wind" id="airconditioning_wind" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_wind}}" name="waterheating_wind" id="waterheating_wind" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                   <select name="powerusedhydro" class="inputactivss selectpicker" title="Hydro" >
                                                        <option value="MWh">MWh (Hydro)</option>
                                                        <option value="Gals">Gals (Hydro)</option>
                                                        <option value="Cubic ft">Cubic ft. (Hydro)</option>
                                                        <option value="Toe">Toe (Hydro)</option>
                                                    </select>
                                                </td>
                                                <td> <input type="text" name="appliances_hydro" value="{{ $property->appliances_hydro}}" class=" inputactivs form-control"   /></td>
                                                <td> <input type="text" value="{{ $property->electronics_hydro}}" name="electronics_hydro" id="electronics_hydro" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->lighting_hydro}}" name="lighting_hydro" id="lighting_hydro" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_hydro}}" name="spaceheating_hydro" id="spaceheating_hydro" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_hydro}}" name="airconditioning_hydro" id="airconditioning_hydro" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_hydro}}" name="waterheating_hydro" id="waterheating_hydro" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                   <select name="powerusedbiomass" class="inputactivss selectpicker" title="Biomass">
                                                        <option value="MWh">MWh (Biomass)</option>
                                                        <option value="Gals">Gals (Biomass)</option>
                                                        <option value="Cubic ft">Cubic ft. (Biomass)</option>
                                                        <option value="Toe">Toe (Biomass)</option>
                                                    </select>
                                                </td>
                                                <td> <input type="text" name="appliances_biomass" value="{{ $property->appliances_biomass}}" class=" inputactivs form-control"   /></td>
                                                <td> <input type="text" value="{{ $property->electronics_biomass}}" name="electronics_biomass" id="electronics_biomass" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->lighting_biomass}}" name="lighting_biomass" id="lighting_biomass" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_biomass}}" name="spaceheating_biomass" id="spaceheating_biomass" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_biomass}}" name="airconditioning_biomass" id="airconditioning_biomass" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_biomass}}" name="waterheating_biomass" id="waterheating_biomass" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                   <select name="powerusedtidal" class="inputactivss selectpicker" title="Tidal">
                                                        <option value="MWh">MWh (Tidal)</option>
                                                        <option value="Gals">Gals (Tidal)</option>
                                                        <option value="Cubic ft">Cubic ft. (Tidal)</option>
                                                        <option value="Toe">Toe (Tidal)</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="appliances_tidal" value="{{ $property->appliances_tidal}}" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->electronics_tidal}}" name="electronics_tidal" id="electronics_tidal" class=" inputactivs form-control" /></td>
                                                <td> <input type="text" value="{{ $property->lighting_tidal}}" name="lighting_tidal" id="lighting_tidal" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_tidal}}" name="spaceheating_tidal" id="spaceheating_tidal" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_tidal}}" name="airconditioning_tidal" id="airconditioning_tidal" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_tidal}}" name="waterheating_tidal" id="waterheating_tidal" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td> 
                                                   <select name="powerusednuclear" class="inputactivss selectpicker" title="Nuclear">
                                                        <option value="MWh">MWh (Nuclear)</option>
                                                        <option value="Gals">Gals (Nuclear)</option>
                                                        <option value="Cubic ft">Cubic ft. (Nuclear)</option>
                                                        <option value="Toe">Toe (Nuclear)</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="appliances_nuclear" value="{{ $property->appliances_nuclear}}" class=" inputactivs form-control"   /></td>
                                                <td><input type="text" value="{{ $property->electronics_nuclear}}" name="electronics_nuclear" id="electronics_nuclear" class=" inputactivs form-control" /></td>
                                                <td> <input type="text" value="{{ $property->lighting_nuclear}}" name="lighting_nuclear" id="lighting_nuclear" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->spaceheating_nuclear}}" name="spaceheating_nuclear" id="spaceheating_nuclear" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->airconditioning_nuclear}}" name="airconditioning_nuclear" id="airconditioning_nuclear" class=" inputactivs form-control" /></td>
                                                <td><input type="text" value="{{ $property->waterheating_nuclear}}" name="waterheating_nuclear" id="waterheating_nuclear" class=" inputactivs form-control" /></td>
                                            </tr>
                                            <tr>
                                            		<td colspan="7">
                                                    		<input type="hidden" name="_method" value="PATCH">
                                                                {{ csrf_field() }}       
                             
                                                    <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                                                    </td>
                                            
                                            </tr>
                                            </tbody>
                                        </table>
                                        
                                         
                                    
                                 
                                                
                                                
                                               <!-- <td>{{ $property->id }}</td>-->
                                   
                                    </form>
							</div>
                            </div>
                        </div>
                     </div>
    			</div>
                
                 
                
  <style>
  	/*#edit_form input{
		max-width:80px;
	}
	#edit_form btn.dropdown-toggle..bs-placeholder.btn-default{
	}*/
  </style>
    <script>
	

		/*function activeAllDS(){
			$('.inputactivs').attr('',false); 
			 $(".inputactivs").prop('', function (_, val) { return ! val; });
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