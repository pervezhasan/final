@extends('layouts.app')


@section('content')

<div class="container">
    <br />
    <h3 align="center">Datatables Server Side Processing in Laravel</h3>
    <br />
    <div align="right">
        <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add</button>
    </div>
    <br />
    <table id="student_table" class="table table-bordered" style="width:100%">
        
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
            <th data-field="appliances_elec">Appliances/ Electricity</th>
            <th data-field="appliances_naturalgas">Appliances/ Natural Gas</th>
            <th data-field="appliances_fuelkerosene" >Appliances/ Fuel oil or Kerosene</th>
            <th data-field="appliances_wood">Appliances/ Wood</th>
            <th data-field="appliances_propane">Appliances/ Propane</th>
            <th data-field="appliances_wind">Appliances/ Wind</th>
            <th data-field="appliances_hydro">Appliances/ Hydro</th>
            <th data-field="electronics_elec">Electronics/ Electricity</th>
            <th data-field="electronics_naturalgas">Electronics/ Natural Gas</th>
            <th data-field="electronics_fuelkerosene" >Electronics/ Fuel oil or Kerosene</th>
            <th data-field="electronics_wood">Electronics / Wood</th>
            <th data-field="electronics_propane">Electronics/ Propane</th>
            <th data-field="electronics_wind">Electronics/ Wind</th>
            <th data-field="electronics_hydro">Electronics/ Hydro</th>
            <th data-field="lighting_elec">Lighting / Electricity</th>
            <th data-field="lighting_naturalgas">Lighting / Natural Gas</th>
            <th data-field="lighting_fuelkerosene" >Lighting / Fuel oil or Kerosene</th>
            <th data-field="lighting_wood">Lighting / Wood</th>
            <th data-field="lighting_propane">Lighting / Propane</th>
            <th data-field="lighting_wind">Lighting / Wind</th>
            <th data-field="lighting_hydro">Lighting / Hydro</th>
            <th data-field="spaceheating_elec">Space Heating / Electricity</th>
            <th data-field="spaceheating_naturalgas">Space Heating / Natural Gas</th>
            <th data-field="spaceheating_fuelkerosene" >Space Heating / Fuel oil or Kerosene</th>
            <th data-field="spaceheating_wood">Space Heating / Wood</th>
            <th data-field="spaceheating_propane">Space Heating / Propane</th>
            <th data-field="spaceheating_wind">Space Heating / Wind</th>
            <th data-field="spaceheating_hydro">Space Heating / Hydro</th>
            <th data-field="airconditioning_elec">Air Conditioning / Electricity</th>
            <th data-field="airconditioning_naturalgas">Air Conditioning / Natural Gas</th>
            <th data-field="airconditioning_fuelkerosene" >Air Conditioning / Fuel oil or Kerosene</th>
            <th data-field="airconditioning_wood">Air Conditioning / Wood</th>
            <th data-field="airconditioning_propane">Air Conditioning / Propane</th>
            <th data-field="airconditioning_wind">Air Conditioning / Wind</th>
            <th data-field="airconditioning_hydro">Air Conditioning / Hydro</th>
            <th data-field="waterheating_elec">Water Heating / Electricity</th>
            <th data-field="waterheating_naturalgas">Water Heating / Natural Gas</th>
            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
            <th data-field="waterheating_wood">Water Heating / Wood</th>
            <th data-field="waterheating_propane">Water Heating / Propane</th>
            <th data-field="waterheating_wind">Water Heating / Wind</th>
            <th data-field="waterheating_hydro">Water Heating / Hydro</th>
            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
            <th data-field="waterheating_wood">Water Heating / Wood</th>
            <th data-field="waterheating_propane">Water Heating / Propane</th>
            <th data-field="waterheating_wind">Water Heating / Wind</th>
            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
            <th data-field="waterheating_wood">Water Heating / Wood</th>
            <th data-field="waterheating_propane">Water Heating / Propane</th>
            <th data-field="waterheating_wind">Water Heating / Wind</th>
            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
            <th data-field="waterheating_wood">Water Heating / Wood</th>
            <th data-field="waterheating_propane">Water Heating / Propane</th>
            <th data-field="waterheating_wind">Water Heating / Wind</th>
            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
            <th data-field="waterheating_wood">Water Heating / Wood</th>
            <th data-field="waterheating_propane">Water Heating / Propane</th>
            <th data-field="waterheating_wind">Water Heating / Wind</th>
            <th data-field="eidt"></th>
            
        </tr>
        </thead>
        <tbody>
        </tbody>
        
    </table>
</div>

<div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="student_form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                     <input type="hidden" name="id" id="student_id" value="" />
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection