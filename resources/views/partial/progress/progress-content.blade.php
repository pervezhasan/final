@extends('layouts.app')
@section('content')
    <style>
        p>input {width: 100%;}
    </style>
        <!-- Container fluid  -->
    <!-- ============================================================== -->
    
        <form action="{{ action('PropertyController@store') }}" method="post">
    {{ csrf_field() }}
    <div id="topper-st">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-12">
                <div class="col-md-4 country-picker">
                    <select class="select2 form-control custom-select" onchange="yesnoCheck(this); setInputvalue();" name="marker-select" id="marker-select">
                    </select>
                    <input type="text" id="hiddenBoxtext" name="country" value="" />
                </div>
                <div class="col-md-4">
                <input style="display:none" onkeyup="showColorBox()" class="form-control clsse" id="ifYes" placeholder="Zip code" type="text" name="zipcode" maxlength="5" /><br />
                </div>
            	<div class="col-md-4">
                </div>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">World Map</h4>
                        <div id="world-map-markers" style="width:100%;height:720px"></div>
                        <div id="site-details"></div>
                        <div id="popup" class=""></div>
                          <div id="mapContainer">
                            <div id="maps"></div>
                            <div id="svgMapOverlay"></div>
                          </div>
                
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="hiddenBox" style="display:none;">
                    <div class="col-lg-12">
                
                        <div class="col-md-4">
                
                            <div id="button-listing">
                
                                <a href="javascript:void(0)" onclick="sTnext(); myPowertypeHd();" class="dt-button">Individual</a>
                
                            </div>
                
                        </div>
                
                        <div class="col-md-4">
                
                            <div id="button-listing">
                
                                <a class="dt-button" href="#">Organization</a>
                
                            </div>
                
                        </div>
                
                        <div class="col-md-4">
                
                            <div id="button-listing">
                
                                <a class="dt-button" href="#">Government</a>
                
                            </div>
                
                
                
                        </div>
                
                    </div>
                </div>
            </div>
        </div>

			

        </div>
    </div>    
        
    
   <div id="entry-main-ind" style="display:none;"> 
    <div class="container-fluid">    
        <div class="row">
            <div class="col-md-12">
                <div class="progresss" style="height:30; border:1px solid #CCC; overflow:hidden">
                    <div id="progresss1" style="width:10%; background:#3c8fbb; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss2" style="width:0%; background:#9dd7a5; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss3" style="width:0%; background:#ffdb87; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss4" style="width:0%; background:#f77c48;transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss5" style="width:0%; background:#d9444e;transition:0.3s; float:left;">.
                    </div>
                </div>
            </div>
        </div>

            <div class="row">
               
                <div class="col-md-8 float-left cusom-tools" id="step1" style="width:100%;">
                    <div class="col-sm-4 pt-2 float-left">
                        <div class="dt-button-divis">How many individuals in household</div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-4 pt-4 float-left">
                        <div class="input-group mb-3 pt-1">
                            <div class="input-group-prepend">
                                <a href="javascript:void(0)" class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></a>
                            </div>
                            <input name="numberindividusalhousehold" type="text" id="qty_input" class="form-control form-control-sm" value="0" min="1">
                            <div class="input-group-prepend">
                                <a href="javascript:void(0)" onClick="toggle('step2'); changeWidth();" class="btn btn-dark btn-sm triger-pro" id="plus-btn"><i class="fa fa-plus"></i></a>
    
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="row">
    
                <div class="cusom-tools" id="step2" style="display:none; width:100%;">
                    <div class="col-sm-2 float-left">
                        <select name="own_or_rent" onchange="admSelectCheck(this); changeColorbg();" class="selectpicker customdrop" title="Add Property at Zip">
                            <option id="Own" value="own">Own</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
                    <div class="col-sm-3 single_selection float-left" id="admDivCheck" style="display:none">
                        <div  class="csm">
                            <select name="single_or_apartment_or_mobilehome" onchange="typeSelectCheck(this); changeColorbg1();  showSB();" id="getFname" class="selectpicker customdrop" title="Select type..">
                                <option  id="SingleFamily" value="Single">Single Family</option>
                                <option  id="Apartment" value="Apartment">Apartment</option>
                                <option id="MobileHome" value="Mobile">Mobile home</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-7 float-left">
                    	<div class="col-sm-4 float-left" >
                            <div lass="csm" class="Apartment prettyprint" id="Apartment" style="display: none;">
                                <select name="apartment_4_unit_or_5_building" id="sleAttached" onclick="show3(); " class="selectpicker customdrop"  title="Apartment Type..">
                                    <option onClick=" changeColorbg2();" value="2-4-unit">2-4-unit</option>
                                    <option onclick="show4(); " value="More Than 5"> &gt; 5 building</option>
                                </select>
                            </div>
                            <div class="Single prettyprint" id="singDivCheck" style="display:none">
                                <div class="csm">
                                    <input class="singlsilc" onclick="showMYDiv(); changeColorbg2();"  type="radio" value="Detached" id="show1" name="single_detached_or_attached" >
                                    <label for="show1">Detached  or </label>
                                    <input class="singlsilc" onclick="showMYDiv(); changeColorbg2();" type="radio" name="single_detached_or_attached" value="Attached" id="attach">
                                    <label for="attach"> Attached </label>
                                </div>
                            </div>
                        </div>
                        <div id="comonall" class="col-sm-8 Mobile prettyprint float-left" style="display: none;">
                        <div class="csm">
                            <input class="form-control" name="year_build" value="" type="text" placeholder="Year Build" />
                            <input onclick="showMYDiv(); changeColorbg2();" class="form-control" id="footage" name="square_footage" value="" type="text" placeholder="Square Footage" />
                        </div>
                    </div>
                        
                    </div>
                    
                </div>
            </div>
    
    
            <div id="myDIV" class="col-md-12 pt-5" style="display:none">
                <div id="fullfom" >
                    <h5>Click the types of energy used for these services in year<select name="serviceyear" id="yearsls" class="yearselect"></select>
                    </h5>
    
                        <div id="table" class="table-editable show-tab" style="overflow:auto">
                            <table style="clear: both; max-width:1800px; overflow:auto" class="table table-bordered table-striped" id="user">
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td>Electricity</td>
                                    <td>Natural Gas</td>
                                    <td>Fuel oil/Kerosene</td>
                                    <td>Wood</td>
                                    <td>Propane</td>
                                    <td class="nopadd">
                                        <ul class="hover-itms">
                                            <li class="parents"><a href="javascript:void(0)" id="Othermain" data-type="text" data-pk="1" data-title="Enter username">Other</a>
                                                <ul class="other-selection">
                                                    <li class="dropdown-item">Solar <i class="fa fa-angle-down"></i></li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0)" onclick="addTds(); disableMove();" class="disable">wind</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0)" onclick="addHydro(); disableMove();" class="disable">Hydro</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                         <a href="javascript:void(0)"  onclick="addBiomass(); disableMove();" class="disable">Biomass</a>
                                                                
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0)" onclick="addTidal(); disableMove();" class="disable">Tidal</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                         <a href="javascript:void(0)" onclick="addNuclear(); disableMove();" class="disable">Nuclear</a>
    
                                                    </li>
    
                                                </ul>
                                            </li>
                                        </ul>
    
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <a href="javascript:void(0)" id="OtherWind" data-type="text" data-pk="1" data-title="Enter Wind">Wind</a>
                                        </div>
                                    </td>
                                    <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <a href="javascript:void(0)" id="OtherHydro" data-type="text" data-pk="1" data-title="Enter Hydro">Hydro</a>
                                        </div>
                                    </td>
                                     <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <a href="javascript:void(0)" id="OtherBiomas" data-type="text" data-pk="1" data-title="Enter Biomas">Biomas</a>
                                        </div>
                                    </td>
                                     <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <a href="javascript:void(0)" id="OtherTidal" data-type="text" data-pk="1" data-title="Enter Tidal">Tidal</a>
                                        </div>
                                    </td>
                                     <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <a href="javascript:void(0)" id="OtherNuclear" data-type="text" data-pk="1" data-title="Enter Nuclear">Nuclear</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td onClick="showNext();">Appliances</td>
                                    <td onClick="showNext();">
                                    <div class="form-group">
                                            <input type="checkbox"   name="appliances" id="appliancescheck" autocomplete="off" onclick="document.getElementById('appliances_elec').disabled = false; " />
                                            <div class="btn-group">
                                                <label for="appliancescheck" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas" id="natural-gascheck" autocomplete="off" onclick="document.getElementById('appliances_naturalgas').disabled = false; " />
                                            <div class="btn-group">
                                                <label for="natural-gascheck" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil" id="poel-oilcheck" autocomplete="off" onclick="document.getElementById('appliances_fuelkarosane').disabled= false; " />
                                            <div class="btn-group">
                                                <label for="poel-oilcheck" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood" id="woodcheck" autocomplete="off" onclick="document.getElementById('appliances_wood').disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="woodcheck" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane" id="propanecheck" autocomplete="off" onclick="document.getElementById('appliances_propane'). disabled = false; " />
                                            <div class="btn-group">
                                                <label for="propanecheck" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td  onClick="showNext();">
                                        <div class="form-group">
                                            <!--<input type="checkbox" name="other-nuclear-5" id="other-nuclear-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>-->
                                        </div>
                                    </td>
                                    <td class="other-wind-hidden"  onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind-5" id="other-wind-5" autocomplete="off" onclick="document.getElementById('appliances_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro-5" id="other-hydro-5" autocomplete="off" onclick="document.getElementById('appliances_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas-5" id="other-biomas-5" autocomplete="off" onclick="document.getElementById('appliances_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal-5" id="other-tidal-5" autocomplete="off" onclick="document.getElementById('appliances_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear-5" id="other-nuclear-5" autocomplete="off" onclick="document.getElementById('appliances_nuclear'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-5" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td onClick="showNext();">Electronics</td>
                                    <td onClick="showNext();">
                                    <div class="form-group">
                                            <input type="checkbox" name="electricity1" id="electricity1check" autocomplete="off" onclick="document.getElementById('electronics_elec'). disabled = false; " />
                                            <div class="btn-group">
                                                <label for="electricity1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas1" id="natural-gas1check" autocomplete="off" onclick="document.getElementById('electronics_naturalgas'). disabled = false; " />
                                            <div class="btn-group">
                                                <label for="natural-gas1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil1" id="poel-oil1check" autocomplete="off" onclick="document.getElementById('electronics_fuelkarosane'). disabled = false; " />
                                            <div class="btn-group">
                                                <label for="poel-oil1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood1" id="wood1check" autocomplete="off" onclick="document.getElementById('electronics_wood'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="wood1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane1" id="propane1check" autocomplete="off" onclick="document.getElementById('electronics_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="propane1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <!--<div class="form-group">
                                            <input type="checkbox" name="other1" id="other1check" autocomplete="off" onclick="document.getElementById('electronics_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other1check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>-->
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind-4" id="other-wind-4" autocomplete="off" onclick="document.getElementById('electronics_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind-4" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro-4" id="other-hydro-4" autocomplete="off" onclick="document.getElementById('electronics_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro-4" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas-4" id="other-biomas-4" autocomplete="off" onclick="document.getElementById('electronics_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas-4" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal-4" id="other-tidal-4" autocomplete="off" onclick="document.getElementById('electronics_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal-4" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear-4" id="other-nuclear-4" autocomplete="off" onclick="document.getElementById('electronics_nuclear'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-4" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td onClick="showNext();">Lighting</td>
                                    <td onClick="showNext();"><div class="form-group">
                                            <input type="checkbox" name="electricity2" id="electricity2check" autocomplete="off" onclick="document.getElementById('lighting_elec'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="electricity2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas2" id="natural-gas2check" autocomplete="off" onclick="document.getElementById('lighting_naturalgas'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="natural-gas2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil2" id="poel-oil2check" autocomplete="off" onclick="document.getElementById('lighting_fuelkarosane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="poel-oil2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood2" id="wood2check" autocomplete="off" onclick="document.getElementById('lighting_wood'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="wood2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane2" id="propane2check" autocomplete="off" onclick="document.getElementById('lighting_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="propane2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other2" id="other2check" autocomplete="off" onclick="document.getElementById('demo17').innerHTML = '<input>' "/>
                                            <div class="btn-group">
                                                <label for="other2check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind-3" id="other-wind-3" autocomplete="off" onclick="document.getElementById('lighting_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind-3" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                     <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro-3" id="other-hydro-3" autocomplete="off" onclick="document.getElementById('lighting_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro-3" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas-3" id="other-biomas-3" autocomplete="off" onclick="document.getElementById('lighting_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas-3" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal-3" id="other-tidal-3" autocomplete="off" onclick="document.getElementById('lighting_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal-3" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear-3" id="other-nuclear-3" autocomplete="off" onclick="document.getElementById('lighting_nuclear'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-3" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                        </td>
                                </tr>
                                <tr>
                                    <td onClick="showNext();">Space heating</td>
                                    <td onClick="showNext();"><div class="form-group">
                                            <input type="checkbox" name="electricity3" id="electricity3check" autocomplete="off" onclick="document.getElementById('spaceheating_elec'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="electricity3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas3" id="natural-gas3check" autocomplete="off" onclick="document.getElementById('spaceheating_naturalgas'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="natural-gas3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil3" id="poel-oil3check" autocomplete="off" onclick="document.getElementById('spaceheating_fuelkarosane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="poel-oil3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood3" id="wood3check" autocomplete="off" onclick="document.getElementById('spaceheating_wood'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="wood3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane3" id="propane3check" autocomplete="off" onclick="document.getElementById('spaceheating_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="propane3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <!--<div class="form-group">
                                            <input type="checkbox" name="other3" id="other3check" autocomplete="off" onclick="document.getElementById('spaceheating_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other3check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>-->
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind-2" id="other-wind-2" autocomplete="off" onclick="document.getElementById('spaceheating_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind-2" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                     <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro-2" id="other-hydro-2" autocomplete="off" onclick="document.getElementById('spaceheating_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro-2" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas-2" id="other-biomas-2" autocomplete="off" onclick="document.getElementById('spaceheating_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas-2" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal-2" id="other-tidal-2" autocomplete="off" onclick="document.getElementById('spaceheating_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal-2" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear-2" id="other-nuclear-2" autocomplete="off" onclick="document.getElementById('spaceheating_nuclear'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-2" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                        </td>
                                </tr>
                                
                                <tr>
                                    <td onClick="showNext();">Air Conditioning</td>
                                    <td onClick="showNext();"><div class="form-group">
                                            <input type="checkbox" name="electricity4" id="electricity4check" autocomplete="off" onclick="document.getElementById('airconditioning_elec'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="electricity4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas4" id="natural-gas4check" autocomplete="off" onclick="document.getElementById('airconditioning_naturalgas'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="natural-gas4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil4" id="poel-oil4check" autocomplete="off" onclick="document.getElementById('airconditioning_fuelkarosane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="poel-oil4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood4" id="wood4check" autocomplete="off" onclick="document.getElementById('airconditioning_wood'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="wood4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane4" id="propane4check" autocomplete="off" onclick="document.getElementById('airconditioning_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="propane4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <!--<div class="form-group">
                                            <input type="checkbox" name="other4" id="other4check" autocomplete="off" onclick="document.getElementById('airconditioning_propane'). disabled = false; " />
                                            <div class="btn-group">
                                                <label for="other4check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>-->
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind-1" id="other-wind-1" autocomplete="off" onclick="document.getElementById('airconditioning_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind-1" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                     <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro-1" id="other-hydro-1" autocomplete="off" onclick="document.getElementById('airconditioning_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro-1" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas-1" id="other-biomas-1" autocomplete="off" onclick="document.getElementById('airconditioning_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas-1" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal-1" id="other-tidal-1" autocomplete="off" onclick="document.getElementById('airconditioning_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal-1" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear-1" id="other-nuclear-1" autocomplete="off" onclick="document.getElementById('airconditioning_nuclear'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear-1" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                        </td>
                                </tr>
                                <tr>
                                    <td onClick="showNext();">Water Heating</td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="electricity5" id="electricity5check" autocomplete="off" onclick="document.getElementById('waterheating_elec'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="electricity5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="natural-gas5" id="natural-gas5check" autocomplete="off" onclick="document.getElementById('waterheating_naturalgas'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="natural-gas5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="poel-oil5" id="poel-oil5check" autocomplete="off" onclick="document.getElementById('waterheating_fuelkarosane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="poel-oil5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="wood5" id="wood5check" autocomplete="off" onclick="document.getElementById('waterheating_wood'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="wood5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="propane5" id="propane5check" autocomplete="off" onclick="document.getElementById('waterheating_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="propane5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td onClick="showNext();">
                                        <!--<div class="form-group">
                                            <input type="checkbox" name="other5" id="other5check" autocomplete="off" onclick="document.getElementById('waterheating_propane'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other5check" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>-->
                                    </td>
                                    <td class="other-wind-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-wind" id="other-wind" autocomplete="off" onclick="document.getElementById('waterheating_wind'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-wind" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                     <td class="other-hydro-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-hydro" id="other-hydro" autocomplete="off" onclick="document.getElementById('waterheating_hydro'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-hydro" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-biomas-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-biomas" id="other-biomas" autocomplete="off" onclick="document.getElementById('waterheating_biomass'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-biomas" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-tidal-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-tidal" id="other-tidal" autocomplete="off" onclick="document.getElementById('waterheating_tidal'). disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-tidal" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="other-nuclear-hidden" onClick="showNext();">
                                        <div class="form-group">
                                            <input type="checkbox" name="other-nuclear" id="other-nuclear" autocomplete="off" onclick="document.getElementById('waterheating_nuclear').disabled = false; "/>
                                            <div class="btn-group">
                                                <label for="other-nuclear" class="btn btn-default">
                                                    <span class="fa fa-check"></span>
                                                    <span> </span>
                                                </label>
                                            </div>
                                        </div>
                                        </td>
                                </tr>
                                
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="javascript:void(0)" onclick="hideticTable(); document.getElementById('yearsl').disabled = true;" class="btn form-control" style="display:none"  id="hidethis"> Next</a>
                                </div>
                                
                            </div>
                        </div>
                    
                </div>
            </div>
    
      
    
    
        <br/>
    
        <div class="container-fluid">
            <div class="row" id="tableShow" style="display:none">
                
                    <div id="table" class="table-editable"  >
                        <table style="clear: both" class="table table-bordered table-striped" id="user">
                            <tbody>
                            <tr>
                                <td></td>
                                <td>
                                <div data-trigger="focus" data-container="body" title="Electricity Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        <select name="powerusedelectricity" class="selectpicker" title="Electricity">
                                        <option value="MWh">MWh (Electricity)</option>
                                        <option value="Gals">Gals (Electricity)</option>
                                        <option value="Cubic ft.">Cubic ft. (Electricity)</option>
                                        <option value="Toe">Toe (Electricity)</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div data-trigger="focus" data-container="body" title="Natural Gas Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        <select name="powerusednaturalgas" class="selectpicker" title="Natural Gas">
                                                    <option value="MWh">MWh (Natural Gas)</option>
                                                    <option value="Gals">Gals (Natural Gas)</option>
                                                    <option value="Cubic ft.">Cubic ft. (Natural Gas)</option>
                                                    <option value="Toe">Toe (Natural Gas)</option>
                                                    </select>
                                    </div>
                                </td>
                                <td>
                                <div data-trigger="focus" data-container="body" title="Poel Oil/Karosane Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                	<select name="powerusedpoeloilkarosane" class="selectpicker" title="Fuel oil/Kerosene">
                                                        <option value="MWh">MWh (Fuel oil or Kerosene)</option>
                                                        <option value="Gals">Gals (Fuel oil or Kerosene)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Fuel oil or Kerosene)</option>
                                                        <option value="Toe">Toe (Fuel oil or Kerosene)</option>
                                                    </select>
                                    </div>
                                    </td>
                                <td>
                                <div data-trigger="focus" data-container="body" title="Wood Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                <select name="powerusedwood" class="selectpicker" title="Wood">
                                                <option value="MWh">MWh (Wood)</option>
                                                <option value="Gals">Gals (Wood)</option>
                                                <option value="Cubic ft.">Cubic ft. (Wood)</option>
                                                <option value="Toe">Toe (Wood)</option>
                                                </select>
                                    </div>
                                    </td>
                                <td>
                                <div data-trigger="focus" data-container="body" title="Propane Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                               <select name="powerusedpropane" class="selectpicker" title="Propane">
                                                       <option value="MWh">MWh (Propane)</option>
                                                        <option value="Gals">Gals (Propane)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Propane)</option>
                                                        <option value="Toe">Toe (Propane)</option>
                                                    </select>
                                    </div>
                                </td>
                                <td> 
                                <div data-trigger="focus" data-container="body" title="Wind Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    <select name="powerusedwind" class="selectpicker" title="Wind">
                                                        <option value="MWh">MWh (Wind)</option>
                                                        <option value="Gals">Gals (Wind)</option>
                                                        <option value="Cubic ft.">Cubic ft. (Wind)</option>
                                                        <option value="Toe">Toe (Wind)</option>
                                                    </select>
                                    </div>
                                </td>
                                <td>
                                    <div data-trigger="focus" data-container="body" title="Hydro Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    <select name="powerusedhydro" class="selectpicker" title="Hydro" >
                                                        <option value="MWh">MWh (Hydro)</option>
                                                        <option value="Gals">Gals (Hydro)</option>
                                                        <option value="Cubic ft">Cubic ft. (Hydro)</option>
                                                        <option value="Toe">Toe (Hydro)</option>
                                                    </select>
                                    </div>
                                </td>
                                <td>
                                    <div data-trigger="focus" data-container="body" title="Biomass Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    <select name="powerusedbiomass" class="selectpicker" title="Biomass">
                                                        <option value="MWh">MWh (Biomass)</option>
                                                        <option value="Gals">Gals (Biomass)</option>
                                                        <option value="Cubic ft">Cubic ft. (Biomass)</option>
                                                        <option value="Toe">Toe (Biomass)</option>
                                                    </select>
                                    </div>
                                
                                </td>
                                <td>
                                <div data-trigger="focus" data-container="body" title="Tidal Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    <select name="powerusedtidal" class="selectpicker" title="Tidal">
                                                        <option value="MWh">MWh (Tidal)</option>
                                                        <option value="Gals">Gals (Tidal)</option>
                                                        <option value="Cubic ft">Cubic ft. (Tidal)</option>
                                                        <option value="Toe">Toe (Tidal)</option>
                                                    </select>
                                    </div>
                                </td>                               
                                <td>
                                <div data-trigger="focus" data-container="body" title="Nuclear Panel" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                     <select name="powerusednuclear" class="inputactivss selectpicker" title="Nuclear">
                                                        <option value="MWh">MWh (Nuclear)</option>
                                                        <option value="Gals">Gals (Nuclear)</option>
                                                        <option value="Cubic ft">Cubic ft. (Nuclear)</option>
                                                        <option value="Toe">Toe (Nuclear)</option>
                                                    </select>
                                    </div>
                                
                                </td>                          
                            </tr>
                            <tr>
                                <td>Appliances</td>
                                <td>
                                   <input type="text" name="appliances_elec" id="appliances_elec" class="form-control" disabled />
                                </td>
                                <td>
                                    <input type="text" name="appliances_naturalgas" id="appliances_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_fuelkarosane" id="appliances_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_wood" id="appliances_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_propane" id="appliances_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_wind" id="appliances_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_hydro" id="appliances_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_biomass" id="appliances_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_tidal" id="appliances_tidal" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="appliances_nuclear" id="appliances_nuclear" class="form-control" disabled  />
                                </td>
                            </tr>
    
                            <tr>
                                <td>Electronics</td>
                                <td>
                                   <input type="text" name="electronics_elec" id="electronics_elec" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_naturalgas" id="electronics_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_fuelkarosane" id="electronics_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_wood" id="electronics_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_propane" id="electronics_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_wind" id="electronics_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_hydro" id="electronics_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_biomass" id="electronics_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_tidal" id="electronics_tidal" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="electronics_nuclear" id="electronics_nuclear" class="form-control" disabled  />
                                </td>
                            </tr>
                            <tr>
                                <td>Lighting</td>
                                 <td>
                                   <input type="text" name="lighting_elec" id="lighting_elec" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_naturalgas" id="lighting_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_fuelkarosane" id="lighting_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_wood" id="lighting_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_propane" id="lighting_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_wind" id="lighting_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_hydro" id="lighting_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_biomass" id="lighting_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_tidal" id="lighting_tidal" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="lighting_nuclear" id="lighting_nuclear" class="form-control" disabled  />
                                </td>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Space heating</td>
                               <td>
                                   <input type="text" name="spaceheating_elec" id="spaceheating_elec" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_naturalgas" id="spaceheating_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_fuelkarosane" id="spaceheating_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_wood" id="spaceheating_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_propane" id="spaceheating_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_wind" id="spaceheating_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_hydro" id="spaceheating_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_biomass" id="spaceheating_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_tidal" id="spaceheating_tidal" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="spaceheating_nuclear" id="spaceheating_nuclear" class="form-control" disabled  />
                                </td>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Air Conditioning</td>
                                <td>
                                   <input type="text" name="airconditioning_elec" id="airconditioning_elec" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_naturalgas" id="airconditioning_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_fuelkarosane" id="airconditioning_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_wood" id="airconditioning_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_propane" id="airconditioning_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_wind" id="airconditioning_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_hydro" id="airconditioning_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_biomass" id="airconditioning_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_tidal" id="airconditioning_tidal" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="airconditioning_nuclear" id="airconditioning_nuclear" class="form-control" disabled  />
                                </td>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Water Heating</td>
                                <td>
                                   <input type="text" name="waterheating_elec" id="waterheating_elec" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_naturalgas" id="waterheating_naturalgas" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_fuelkarosane" id="waterheating_fuelkarosane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_wood" id="waterheating_wood" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_propane" id="waterheating_propane" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_wind" id="waterheating_wind" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_hydro" id="waterheating_hydro" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_biomass" id="waterheating_biomass" class="form-control" disabled  />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_tidal" id="waterheating_tidal" class="form-control" disabled />
                                </td>
                                <td>
                                    <input type="text" name="waterheating_nuclear" id="waterheating_nuclear" class="form-control" disabled />
                                </td>
                                
                            </tr>
                            <tr>
                             <div id="hidden_all_filed">
                             <!--<input type="text" id="numberindividusalhousehold" name="numberindividusalhousehold" value="" />-->
 							
                            <input   type="hidden" id="powertypehd" name="powertype" value="" />
                            <input id="property_token" type="hidden" name"_token" value="{!! csrf_token() !!}">
                            </div>
                            
                            </tr>
                            <tr>
                                <td><input onclick="" class="btn form-control" style="display: block;" name="submit" value="Next" id="hidethis" type="submit"></td>
                            </tr>
                            </tbody>
                        </table>
                       
                    </div>
                
    
                                    
            </div>
        </div>
        
  </div>
  </div>
  </form>
 
          
<script>
function  showSB(){
	document.getElementById('comonall').style.display ='block';
}
function myPowertypeHd(){
  document.getElementById("powertypehd").value = "Individual";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
  function showMYDiv(){
	 document.getElementById('myDIV').style.display ='block';
}
function showNdiv(){
	 document.getElementById('myDIV').style.display ='block';
}
  </script>
@endsection