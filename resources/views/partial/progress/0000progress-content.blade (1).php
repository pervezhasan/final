@extends('layouts.app')
@section('content')
    <style>
        p>input {width: 100%;}
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="progresss" style="height:30; border:1px solid #CCC; overflow:hidden">
                    <div id="progresss1" style="width:10%; background:red; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss2" style="width:0%; background:blue; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss3" style="width:0%; background:yellow; transition:0.3s; float:left;">.
                    </div>
                    <div id="progresss4" style="width:0%; background:#29627e;transition:0.3s; float:left;">.
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 pt-2 cusom-tools float-left">
                <div id="button-listing">
                    <a onclick="toggle('step1')" class="dt-button" href="#">Individual</a>
                </div>
            </div>
            <div class="col-md-8 float-left cusom-tools" id="step1" style="display:none; width:100%;">
                <div class="col-sm-4 pt-2 float-left">
                    <div class="dt-button-divis">How many individuals in household</div>
                </div>
                <div class="col-sm-3 col-sm-offset-4 pt-4 float-left">
                    <div class="input-group mb-3 pt-1">
                        <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                        </div>
                        <input type="text" id="qty_input" class="form-control form-control-sm" value="0" min="1">
                        <div class="input-group-prepend">
                            <button onClick="toggle('step2'); changeWidth();" class="btn btn-dark btn-sm triger-pro" id="plus-btn"><i class="fa fa-plus"></i></button>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="cusom-tools" id="step2" style="display:none; width:100%;">
                <div class="col-sm-2 float-left">
                    <select onchange="admSelectCheck(this); changeColorbg();" class="selectpicker customdrop" title="Add Porpert at Zip">
                        <option id="Own" value="own">Own</option>
                        <option value="rent">Rent</option>
                    </select>
                </div>
                <div class="col-sm-3 single_selection float-left" id="admDivCheck" style="display:none">
                    <div  class="csm">
                        <select onchange="typeSelectCheck(this); changeColorbg1();" id="getFname" class="selectpicker customdrop" title="Select type..">
                            <option  id="SingleFamily" value="singleOption">Single Family</option>
                            <option  id="Apartment" value="apartmentOption">Apartment</option>
                            <option id="MobileHome" value="mobileOption">Mobile home</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2 singleOption prettyprint float-left" id="singDivCheck" style="display:none">
                    <div class="csm">
                        <input class="singlsilc" onclick="show1(); changeColorbg2();"  type="radio" value="Detached" id="show1" name="single-familytype" >
                        <label for="show1">Detached  or </label>
                        <input class="singlsilc" onclick="show1(); changeColorbg2();" type="radio" name="single-familytype" value="Apartment" id="attach">
                        <label for="attach"> Attached </label>
                    </div>
                </div>
                <div class="col-sm-3 float-left apartmentOption prettyprint" id="Apartmen" style="display: none;">
                    <div lass="csm">
                        <select id="sleAttached" onclick="show3();" class="selectpicker customdrop"  title="Apartment Type..">
                            <option onClick=" changeColorbg2();" value="2-4-unit">2-4-unit</option>
                            <option onclick="show4(); " value="More Than 5"> &gt; 5building</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-7 mobileOption prettyprint float-left" style="display: none;">
                    <div class="csm">
                        <input class="form-control" name="year_build" value="" type="text" placeholder="Year Build" />
                        <input onclick="show1(); changeColorbg2();" class="form-control" id="footage" name="square_footage" value="" type="text" placeholder="Square Footage" />
                    </div>
                </div>
            </div>
        </div>


        <div id="myDIV" class="col-md-12 pt-5" style="display:none">
            <div id="fullfom" >
                <h5>Click the types of energy used for these services in year
                    {{--<a href="javascript:void(0)" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">2017</a>--}}
                    <select id="">
                        <option value="2017"> 2017 </option>
                        <option value="2018"> 2018 </option>
                        <option value="2019"> 2019 </option>
                        <option value="2020"> 2020 </option>
                        <option value="2021"> 2021 </option>
                        <option value="2022"> 2022 </option>
                        <option value="2023"> 2023 </option>
                        <option value="2024"> 2024 </option>
                        <option value="2025"> 2025 </option>
                        <option value="2026"> 2026 </option>
                        <option value="2027"> 2027 </option>
                        <option value="2028"> 2028 </option>
                        <option value="2029"> 2029 </option>
                        <option value="2030"> 2030 </option>
                        <option value="2031"> 2031 </option>
                        <option value="2032"> 2032 </option>
                        <option value="2033"> 2033 </option>
                        <option value="2034"> 2034 </option>
                        <option value="2035"> 2035 </option>
                        <option value="2036"> 2036 </option>
                        <option value="2037"> 2037 </option>
                        <option value="2038"> 2038 </option>
                        <option value="2039"> 2039 </option>
                        <option value="2040"> 2040 </option>
                    </select>
                </h5>
                {{--<form action="{{route('next')}}" method="post">--}}
                {{--<form action="" method="post">--}}
                    {{--{{csrf_field()}}--}}
                    <div id="table" class="table-editable show-tab">
                        <table style="clear: both" class="table table-bordered table-striped" id="user">
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Electricity</td>
                                <td>Natural Gas</td>
                                <td>Poel oil/Karosane</td>
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
                                <td onClick="showNext();"><div class="form-group">
                                        <input type="checkbox"   name="appliances" id="appliancescheck" autocomplete="off" onclick="document.getElementById('demo').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="natural-gas" id="natural-gascheck" autocomplete="off" onclick="document.getElementById('demo1').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="poel-oil" id="poel-oilcheck" autocomplete="off" onclick="document.getElementById('demo2').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="wood" id="woodcheck" autocomplete="off" onclick="document.getElementById('demo3').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane" id="propanecheck" autocomplete="off" onclick="document.getElementById('demo4').innerHTML = '<input>' " />
                                        <div class="btn-group">
                                            <label for="propanecheck" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other" id="othercheck" autocomplete="off" onclick="document.getElementById('demo5').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="othercheck" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="other-wind-hidden" onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other-wind-5" id="other-wind-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro-5" id="other-hydro-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas-5" id="other-biomas-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal-5" id="other-tidal-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear-5" id="other-nuclear-5" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                <td onClick="showNext();"><div class="form-group">
                                        <input type="checkbox" name="electricity1" id="electricity1check" autocomplete="off" onclick="document.getElementById('demo6').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="natural-gas1" id="natural-gas1check" autocomplete="off" onclick="document.getElementById('demo7').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="poel-oil1" id="poel-oil1check" autocomplete="off" onclick="document.getElementById('demo8').innerHTML = '<input>' " />
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
                                        <input type="checkbox" name="wood1" id="wood1check" autocomplete="off" onclick="document.getElementById('demo9').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane1" id="propane1check" autocomplete="off" onclick="document.getElementById('demo10').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="propane1check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other1" id="other1check" autocomplete="off" onclick="document.getElementById('demo11').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other1check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="other-wind-hidden" onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other-wind-4" id="other-wind-4" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro-4" id="other-hydro-4" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas-4" id="other-biomas-4" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal-4" id="other-tidal-4" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear-4" id="other-nuclear-4" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other-nuclear-4" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Lighting</td>
                                <td onClick="showNext();"><div class="form-group">
                                        <input type="checkbox" name="electricity2" id="electricity2check" autocomplete="off" onclick="document.getElementById('demo12').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="natural-gas2" id="natural-gas2check" autocomplete="off" onclick="document.getElementById('demo13').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="poel-oil2" id="poel-oil2check" autocomplete="off" onclick="document.getElementById('demo14').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="wood2" id="wood2check" autocomplete="off" onclick="document.getElementById('demo15').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane2" id="propane2check" autocomplete="off" onclick="document.getElementById('demo16').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-wind-3" id="other-wind-3" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro-3" id="other-hydro-3" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas-3" id="other-biomas-3" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal-3" id="other-tidal-3" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear-3" id="other-nuclear-3" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other-nuclear-3" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Space heating</td>
                                <td onClick="showNext();"><div class="form-group">
                                        <input type="checkbox" name="electricity3" id="electricity3check" autocomplete="off" onclick="document.getElementById('demo18').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="natural-gas3" id="natural-gas3check" autocomplete="off" onclick="document.getElementById('demo19').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="poel-oil3" id="poel-oil3check" autocomplete="off" onclick="document.getElementById('demo20').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="wood3" id="wood3check" autocomplete="off" onclick="document.getElementById('demo21').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane3" id="propane3check" autocomplete="off" onclick="document.getElementById('demo22').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="propane3check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other3" id="other3check" autocomplete="off" onclick="document.getElementById('demo23').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other3check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="other-wind-hidden" onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other-wind-2" id="other-wind-2" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro-2" id="other-hydro-2" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas-2" id="other-biomas-2" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal-2" id="other-tidal-2" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear-2" id="other-nuclear-2" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other-nuclear-2" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Air Conditioning</td>
                                <td onClick="showNext();"><div class="form-group">
                                        <input type="checkbox" name="electricity4" id="electricity4check" autocomplete="off" onclick="document.getElementById('demo24').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="natural-gas4" id="natural-gas4check" autocomplete="off" onclick="document.getElementById('demo25').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="poel-oil4" id="poel-oil4check" autocomplete="off" onclick="document.getElementById('demo26').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="wood4" id="wood4check" autocomplete="off" onclick="document.getElementById('demo27').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane4" id="propane4check" autocomplete="off" onclick="document.getElementById('demo28').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="propane4check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other4" id="other4check" autocomplete="off" onclick="document.getElementById('demo29').innerHTML = '<input>' " />
                                        <div class="btn-group">
                                            <label for="other4check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="other-wind-hidden" onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other-wind-1" id="other-wind-1" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro-1" id="other-hydro-1" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas-1" id="other-biomas-1" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal-1" id="other-tidal-1" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear-1" id="other-nuclear-1" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other-nuclear-1" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                            </tr>
                            <tr>
                                <td onClick="showNext();">Water Heating</td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="electricity5" id="electricity5check" autocomplete="off" onclick="document.getElementById('demo30').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="natural-gas5" id="natural-gas5check" autocomplete="off" onclick="document.getElementById('demo31').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="poel-oil5" id="poel-oil5check" autocomplete="off" onclick="document.getElementById('demo32').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="wood5" id="wood5check" autocomplete="off" onclick="document.getElementById('demo33').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="propane5" id="propane5check" autocomplete="off" onclick="document.getElementById('demo34').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="propane5check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other5" id="other5check" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other5check" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="other-wind-hidden" onClick="showNext();">
                                    <div class="form-group">
                                        <input type="checkbox" name="other-wind" id="other-wind" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-hydro" id="other-hydro" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-biomas" id="other-biomas" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-tidal" id="other-tidal" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
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
                                        <input type="checkbox" name="other-nuclear" id="other-nuclear" autocomplete="off" onclick="document.getElementById('demo35').innerHTML = '<input>' "/>
                                        <div class="btn-group">
                                            <label for="other-nuclear" class="btn btn-default">
                                                <span class="fa fa-check"></span>
                                                <span> </span>
                                            </label>
                                        </div>
                                    </div>
                            </tr>
                            
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-8">
                                <input onclick="hideticTable()" class="btn form-control btn-success" style="display:none" type="submit" name="submit-pree" value="Next" id="hidethis" />
                            </div>
                            
                        </div>
                    </div>
                {{--</form>--}}
            </div>
        </div>

    </div>



    <br/>

    <div class="container-fluid">
        <div class="row" id="tableShow" style="display:none">
            <form action="#" method="post">
                {{csrf_field()}}
                <div id="table" class="table-editable">
                    <table style="clear: both" class="table table-bordered table-striped" id="user">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>
                            	<select class="selectpicker" title="Electricity">
                                	<option value="MWh">MWh</option>
                                </select>
                            </td>
                            <td>
                            	<select class="selectpicker" title="Natural Gas">
                                	<option value="gals">gals</option>
                                </select>
                            </td>
                            <td><select class="selectpicker" title="Poel oil/Karosane">
                                	<option value="qub ft">qub ft.</option>
                                </select></td>
                            <td><select class="selectpicker" title="Wood">
                                	<option value="toe">TOE</option>
                                </select></td>
                            <td>Propane</td>
                            <td class="nopadd">
                                <ul class="hover-itms">
                                    <li class="parents"><a href="javascript:void(0)" id="Othermain" data-type="text" data-pk="1" data-title="Enter username">Other</a>
                                        <ul class="other-selection">
                                            <li class="dropdown-item">Solar <i class="fa fa-angle-down"></i></li>
                                            <li class="dropdown-item">
                                                <div class="form-group">
                                                    <input type="checkbox" name="wind" id="wind" autocomplete="off" />
                                                    <div class="btn-group">
                                                        <label for="wind" class="btn btn-default">
                                                            <span class="fa fa-check"></span>
                                                            <span> </span>
                                                        </label>
                                                        <label for="wind" class="btn btn-default active">
                                                            wind
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-group">
                                                    <input type="checkbox" name="hydro" id="hydro" autocomplete="off" />
                                                    <div class="btn-group">
                                                        <label for="hydro" class="btn btn-default">
                                                            <span class="fa fa-check"></span>
                                                            <span> </span>
                                                        </label>
                                                        <label for="hydro" class="btn btn-default active">
                                                            Hydro
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-group">
                                                    <input type="checkbox" name="biomass" id="biomass" autocomplete="off" />
                                                    <div class="btn-group">
                                                        <label for="biomass" class="btn btn-default">
                                                            <span class="fa fa-check"></span>
                                                            <span> </span>
                                                        </label>
                                                        <label for="biomass" class="btn btn-default active">
                                                            Biomass
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-group">
                                                    <input type="checkbox" name="tidal" id="tidal" autocomplete="off" />
                                                    <div class="btn-group">
                                                        <label for="tidal" class="btn btn-default">
                                                            <span class="fa fa-check"></span>
                                                            <span> </span>
                                                        </label>
                                                        <label for="tidal" class="btn btn-default active">
                                                            Tidal
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-group">
                                                    <input type="checkbox" name="nuclear" id="nuclear" autocomplete="off" />
                                                    <div class="btn-group">
                                                        <label for="nuclear" class="btn btn-default">
                                                            <span class="fa fa-check"></span>
                                                            <span> </span>
                                                        </label>
                                                        <label for="nuclear" class="btn btn-default active">
                                                            Nuclear
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>

                            </td>
                        </tr>
                        <tr>
                            <td>Appliances</td>
                            <td>
                                <p class="mb-0" id="demo" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo1"></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo2"></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo3" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo4"></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo5" ></p>
                            </td>
                        </tr>
                        <tr>
                            <td onClick="showNext();">Electronics</td>
                            <td>
                                <p class="mb-0" id="demo6" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo7" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo8" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo9" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo10" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo11" ></p>
                            </td>
                        </tr>
                        <tr>
                            <td onClick="showNext();">Lighting</td>
                            <td>
                                <p class="mb-0" id="demo12" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo13" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo14" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo15" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo16" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo17" ></p>
                            </td>
                        </tr>
                        <tr>
                            <td onClick="showNext();">Space heating</td>
                            <td>
                                <p class="mb-0" id="demo18" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo19" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo20" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo21" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo22" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo23" ></p>
                            </td>
                        </tr>
                        <tr>
                            <td onClick="showNext();">Air Conditioning</td>
                            <td>
                                <p class="mb-0" id="demo24" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo25" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo26" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo27" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo28" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo29" ></p>
                            </td>
                        </tr>
                        <tr>
                            <td onClick="showNext();">Water Heating</td>
                            <td>
                                <p class="mb-0" id="demo30" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo31" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo32" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo33" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo34" ></p>
                            </td>
                            <td>
                                <p class="mb-0" id="demo35" ></p>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </form>
            <table>
            <tbody>
           		<tr>
                 <td colspan="8">
                            	<input onclick="goVasale(); showVasale();" class="btn form-control" style="display: block;" name="submit-vasel" value="Next" id="hidethis" type="submit">
                            </td>
                            </tr>
                            </tbody>
                            </table>
        </div>
    </div>
    <div class="container-fluid">
    	<div  id="vasale-tbale" style="display:none">
            <div class="row">
                <div id="button-listing">
                        <a onclick="" class="dt-button" href="javascript:void(0)">Individual</a>
                    </div>
            </div>
        </div>
    </div>
    

    <script>
		function goVasale() {
            document.getElementById('tableShow').style.display ='none';
        }
		function showVasale() {
            document.getElementById('vasale-tbale').style.display ='block';
        }
        function changeWidth() {
            document.getElementById('progresss1').style.width = "20%"
        }
        function changeColorbg() {
            document.getElementById('progresss2').style.width = "20%"
        }
        function changeColorbg1() {
            document.getElementById('progresss3').style.width = "20%"
        }
        function changeColorbg2() {
            document.getElementById('progresss4').style.width = "20%"
        }
    </script>

    <script type="text/javascript" language="javascript">
	function hideticTable() {
		$('#table').addClass('hide_table').removeClass('show-tab')
	}
	function addTds() {
		$('.other-wind-hidden').addClass('className').removeClass('other-wind-hidden')
	}
	function addHydro() {
		$('.other-hydro-hidden').addClass('hydro-other').removeClass('other-hydro-hidden')
	}
	function addBiomass(){
		$('.other-biomas-hidden').addClass('biomass-other').removeClass('other-biomas-hidden')
	}
	function addTidal(){
		$('.other-tidal-hidden').addClass('tidal-other').removeClass('other-tidal-hidden')
	}
	function addNuclear(){
		$('.other-nuclear-hidden').addClass('nuclear-other').removeClass('other-nuclear-hidden')
	}
	function disableMove(){
	$( ".disable" ).click(function( event ) {
	  event.preventDefault();
	});
	}

        /* Latest compiled and minified JavaScript included as External Resource */
        function showNext() {
            document.getElementById('hidethis').style.display ='block';
        }
        function show1(){
            document.getElementById('myDIV').style.display ='block';
        }
        function show2(){
            document.getElementById('div1').style.display = 'block';
        }
        var elem = document.getElementById("sleAttached");
        elem.onchange = function(){
            var hiddenDiv = document.getElementById("myDIV");
            var bgDiv = document.getElementById("progresss4");
            hiddenDiv.style.display = (this.value == "") ? "none":"block";
            bgDiv.style.background = "#29627e";

        };
        function typeSelectCheck(nameSelect){
            if(nameSelect.value){
                var optionElements = document.getElementsByClassName('prettyprint');
                for(var i=0; i < optionElements.length; i++){
                    //if the class contains the selected value, then show it, else hide it
                    optionElements[i].style.display = optionElements[i].classList.contains(nameSelect.value)?'block':'none';
                }
            }
        }
        function toggle(id){
            var element = document.getElementById(id);
            if(element.style.display=="none"){
                element.style.display="block";
            }else{
                element.style.display="block";
            }
        }
        function admSelectCheck(nameSelect){
            if(nameSelect){
                admOptionValue = document.getElementById("Own").value;
                if(admOptionValue == nameSelect.value){
                    document.getElementById("admDivCheck").style.display = "block";
                }
                else{
                    document.getElementById("admDivCheck").style.display = "none";
                }
            }
            else{
                document.getElementById("admDivCheck").style.display = "none";
            }
        }

    </script>
<style>
.hide_table{
	display:none;
}
</style>
@endsection