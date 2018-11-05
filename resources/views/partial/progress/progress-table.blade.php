@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    	<form action="#" method="post">
            {{csrf_field()}}
            <div id="table" class="table-editable">
                <table style="clear: both" class="table table-bordered table-striped" id="user">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Electricity</td>
                            <td>Natural Gas</td>
                            <td>Poel oil/Karosane</td>
                            <td>Wood</td>
                            <td>Propane</td>Solar   
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
                            <td onClick="showNext();">Appliances</td>
                            <td onClick="showNext();"><div class="form-group">
                                <input type="checkbox" name="appliances" id="appliancescheck" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas" id="natural-gascheck" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil" id="poel-oilcheck" autocomplete="off" />
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
                                    <input type="checkbox" name="wood" id="woodcheck" autocomplete="off" />
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
                                    <input type="checkbox" name="propane" id="propanecheck" autocomplete="off" />
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
                                    <input type="checkbox" name="other" id="othercheck" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="othercheck" class="btn btn-default">
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
                                <input type="checkbox" name="electricity1" id="electricity1check" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas1" id="natural-gas1check" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil1" id="poel-oil1check" autocomplete="off" />
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
                                    <input type="checkbox" name="wood1" id="wood1check" autocomplete="off" />
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
                                    <input type="checkbox" name="propane1" id="propane1check" autocomplete="off" />
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
                                    <input type="checkbox" name="other1" id="other1check" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="other1check" class="btn btn-default">
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
                                <input type="checkbox" name="electricity2" id="electricity2check" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas2" id="natural-gas2check" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil2" id="poel-oil2check" autocomplete="off" />
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
                                    <input type="checkbox" name="wood2" id="wood2check" autocomplete="off" />
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
                                    <input type="checkbox" name="propane2" id="propane2check" autocomplete="off" />
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
                                    <input type="checkbox" name="other2" id="other2check" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="other2check" class="btn btn-default">
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
                                <input type="checkbox" name="electricity3" id="electricity3check" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas3" id="natural-gas3check" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil3" id="poel-oil3check" autocomplete="off" />
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
                                    <input type="checkbox" name="wood3" id="wood3check" autocomplete="off" />
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
                                    <input type="checkbox" name="propane3" id="propane3check" autocomplete="off" />
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
                                    <input type="checkbox" name="other3" id="other3check" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="other3check" class="btn btn-default">
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
                                <input type="checkbox" name="electricity4" id="electricity4check" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas4" id="natural-gas4check" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil4" id="poel-oil4check" autocomplete="off" />
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
                                    <input type="checkbox" name="wood4" id="wood4check" autocomplete="off" />
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
                                    <input type="checkbox" name="propane4" id="propane4check" autocomplete="off" />
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
                                    <input type="checkbox" name="other4" id="other4check" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="other4check" class="btn btn-default">
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
                                <input type="checkbox" name="electricity5" id="electricity5check" autocomplete="off" />
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
                                    <input type="checkbox" name="natural-gas5" id="natural-gas5check" autocomplete="off" />
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
                                    <input type="checkbox" name="poel-oil5" id="poel-oil5check" autocomplete="off" />
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
                                    <input type="checkbox" name="wood5" id="wood5check" autocomplete="off" />
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
                                    <input type="checkbox" name="propane5" id="propane5check" autocomplete="off" />
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
                                    <input type="checkbox" name="other5" id="other5check" autocomplete="off" />
                                    <div class="btn-group">
                                        <label for="other5check" class="btn btn-default">
                                            <span class="fa fa-check"></span>
                                            <span> </span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="hide">
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics"  data-type="text" data-pk="1" data-title="Extra Fields">Add</a>
                            </td>
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics"  data-type="text" data-pk="1" data-title="Extra Fields 1">Add</a>
                            </td>
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics" data-type="text" data-pk="1" data-title="Extra Fields 2">Add</a>
                            </td>
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics" data-type="text" data-pk="1" data-title="Extra Fields 3">Add</a>
                            </td>
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics" data-type="text" data-pk="1" data-title="Extra Fields 4">Add</a></td>
                            <td class="pt-3-half" contenteditable="true">
                            <a href="javascript:void(0)" class="dynamics" data-type="text" data-pk="1" data-title="Extra Fields 4">Add</a></td>
                              
                              
                            <td onClick="showNext();">
                                <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
@endsection