@extends('layouts.app')
@section('content')
                <div class="row">
                    <div class="col-12">
                        <!-- Table -->
                        <div class="card">
                            <div class="card-body" style="overflow:auto">
                            	 
                            @if($property->count() > 0)
                              
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
                                            <th data-field="appliances_elec">Appliances/ Electricity</th>
                                            <th data-field="appliances_naturalgas">Appliances/ Natural Gas</th>
                                            <th data-field="appliances_fuelkerosene" >Appliances/ Fuel oil or Kerosene</th>
                                            <th data-field="appliances_wood">Appliances/ Wood</th>
                                            <th data-field="appliances_propane">Appliances/ Propane</th>
                                            <th data-field="appliances_wind">Appliances/ Wind</th>
                                            <th data-field="appliances_hydro">Appliances/ Hydro</th>
                                            
                                            <th data-field="appliances_wind">Appliances/ Biomas</th>
                                            <th data-field="appliances_hydro">Appliances/ Tidal</th>
                                            <th data-field="appliances_hydro">Appliances/ Nuclear</th>
                                            
                                            <th data-field="electronics_elec">Electronics/ Electricity</th>
                                            <th data-field="electronics_naturalgas">Electronics/ Natural Gas</th>
                                            <th data-field="electronics_fuelkerosene" >Electronics/ Fuel oil or Kerosene</th>
                                            <th data-field="electronics_wood">Electronics / Wood</th>
                                            <th data-field="electronics_propane">Electronics/ Propane</th>
                                            <th data-field="electronics_wind">Electronics/ Wind</th>
                                            <th data-field="electronics_hydro">Electronics/ Hydro</th>
                                            <th data-field="appliances_wind">Electronics/ Biomas</th>
                                            <th data-field="appliances_hydro">Electronics/ Tidal</th>
                                            <th data-field="appliances_hydro">Electronics/ Nuclear</th>
                                            
                                            <th data-field="lighting_elec">Lighting / Electricity</th>
                                            <th data-field="lighting_naturalgas">Lighting / Natural Gas</th>
                                            <th data-field="lighting_fuelkerosene" >Lighting / Fuel oil or Kerosene</th>
                                            <th data-field="lighting_wood">Lighting / Wood</th>
                                            <th data-field="lighting_propane">Lighting / Propane</th>
                                            <th data-field="lighting_wind">Lighting / Wind</th>
                                            <th data-field="lighting_hydro">Lighting / Hydro</th>
                                            <th data-field="appliances_wind">Lighting/ Biomas</th>
                                            <th data-field="appliances_hydro">Lighting/ Tidal</th>
                                            <th data-field="appliances_hydro">Lighting/ Nuclear</th>
                                            
                                            <th data-field="spaceheating_elec">Space Heating / Electricity</th>
                                            <th data-field="spaceheating_naturalgas">Space Heating / Natural Gas</th>
                                            <th data-field="spaceheating_fuelkerosene" >Space Heating / Fuel oil or Kerosene</th>
                                            <th data-field="spaceheating_wood">Space Heating / Wood</th>
                                            <th data-field="spaceheating_propane">Space Heating / Propane</th>
                                            <th data-field="spaceheating_wind">Space Heating / Wind</th>
                                            <th data-field="spaceheating_hydro">Space Heating / Hydro</th>
                                            <th data-field="appliances_wind">Space Heating/ Biomas</th>
                                            <th data-field="appliances_hydro">Space Heating/ Tidal</th>
                                            <th data-field="appliances_hydro">Space Heating/ Nuclear</th>
                                            
                                            <th data-field="airconditioning_elec">Air Conditioning / Electricity</th>
                                            <th data-field="airconditioning_naturalgas">Air Conditioning / Natural Gas</th>
                                            <th data-field="airconditioning_fuelkerosene" >Air Conditioning / Fuel oil or Kerosene</th>
                                            <th data-field="airconditioning_wood">Air Conditioning / Wood</th>
                                            <th data-field="airconditioning_propane">Air Conditioning / Propane</th>
                                            <th data-field="airconditioning_wind">Air Conditioning / Wind</th>
                                            <th data-field="airconditioning_hydro">Air Conditioning / Hydro</th>
                                            <th data-field="appliances_wind">Air Conditioning / Biomas</th>
                                            <th data-field="appliances_hydro">Air Conditioning / Tidal</th>
                                            <th data-field="appliances_hydro">Air Conditioning / Nuclear</th>
                                            
                                            <th data-field="waterheating_elec">Water Heating / Electricity</th>
                                            <th data-field="waterheating_naturalgas">Water Heating / Natural Gas</th>
                                            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
                                            <th data-field="waterheating_wood">Water Heating / Wood</th>
                                            <th data-field="waterheating_propane">Water Heating / Propane</th>
                                            <th data-field="waterheating_wind">Water Heating / Wind</th>
                                            <th data-field="waterheating_hydro">Water Heating / Hydro</th>
                                             <th data-field="appliances_wind">Water Heating / Biomas</th>
                                            <th data-field="appliances_hydro">Water Heating / Tidal</th>
                                            <th data-field="appliances_hydro">Water Heating / Nuclear</th>
                                            <th data-field="eidt"></th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        		@foreach($property as $property)
                                                <tr id="{{ $property->id }}">
                                                    <td>{{ $property->id }}</td>
                                                    <td>{{ $property->country }}</td>
                                                    <td>
                                                    @if($property->zipcode == null)
                                                		N/A
                                                    @else
                                                    {{ $property->zipcode }} 
                                                    @endif
                                                   
                                                    </td>
                                                    <td>{{ $property->powertype }}</td>
                                                    <td>{{ $property->numberindividusalhousehold }}</td>
                                                    <td>
                                                    @if($property->own_or_rent == null)
                                                		N/A
                                                    @else
                                                    {{$property->own_or_rent }} 
                                                    @endif
                                                   
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->single_or_apartment_or_mobilehome == null)
                                                		N/A
                                                    @else
                                                    {{$property->single_or_apartment_or_mobilehome }} 
                                                    @endif
                                                    
                                                    </td> 
                                                    <td>
                                                    @if($property->single_detached_or_attached == null)
                                                		N/A
                                                    @else
                                                    {{$property->single_detached_or_attached }} 
                                                    @endif
                                                   
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->apartment_4_unit_or_5_building == null)
                                                		N/A
                                                    @else
                                                    {{$property->apartment_4_unit_or_5_building }} 
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->year_build == null)
                                                		N/A
                                                    @else
                                                    {{$property->year_build }} 
                                                    @endif
                                                    </td> 
                                                    <td>
                                                    @if($property->square_footage == null)
                                                		N/A
                                                    @else
                                                    {{$property->square_footage }} 
                                                    @endif
                                                   </td>
                                                    <td>
                                                     @if($property->serviceyear == null)
                                                		N/A
                                                    @else
                                                    {{$property->serviceyear }} 
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_elec == null)
                                                		N/A
                                                    @else
                                                    {{ $property->appliances_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->appliances_naturalgas == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->appliances_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->appliances_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_propane == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->appliances_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_wind == null)
                                                     N/A
                                                     @else
                                                   {{ $property->appliances_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    
                                                   </td>
                                                    <td>
                                                    @if($property->appliances_hydro == null)
                                                   N/A
                                                     @else
                                                     {{ $property->appliances_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                    @if($property->electronics_elec == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->electronics_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_wood == null)
                                                     N/A
                                                     @else
                                                   {{ $property->electronics_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_propane == null)
                                                     N/A
                                                     @else
                                                   {{ $property->electronics_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->lighting_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_hydro == null)
                                                     N/A
                                                     @else
                                                   {{ $property->lighting_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->lighting_biomass == null)
                                                     N/A
                                                     @else
                                                   {{ $property->lighting_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->spaceheating_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_wood == null)
                                                     N/A
                                                     @else
                                                   {{ $property->spaceheating_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->spaceheating_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_biomass == null)
                                                   N/A
                                                     @else
                                                     {{ $property->spaceheating_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_tidal == null)
                                                   N/A
                                                     @else
                                                     {{ $property->spaceheating_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->airconditioning_elec == null)
                                                   N/A
                                                     @else
                                                     {{ $property->airconditioning_elec}} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_naturalgas == null)
                                                   N/A
                                                     @else
                                                     {{ $property->airconditioning_naturalgas}} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_fuelkarosane}} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_wood}} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                    @if($property->waterheating_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_elec}} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_fuelkarosane}} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_wood}} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td><a id="eidtitem" data-confirm="Are you sure to Edit this item?" href="property/{{ $property->id }}/edit">Eidit</a> <a id="confirmation" data-confirm="Are you sure to delete this item?" href="property/{{ $property->id }}/delet">Delet</a></td>
                                                </tr>
                                         @endforeach 
                                    </tbody>
                                </table>
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
         <!--<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Editable with Datatable</h4>
                                <h6 class="card-subtitle">Just click on word which you want to change and enter</h6>
                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="1" class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0 </td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr id="2" class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="3" class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="4" class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="5" class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="6" class="gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="7" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="8" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="9" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="10" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="11" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="12" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="13" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="14" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="15" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="16" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="17" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="18" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.2</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="19" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="20" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.4</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="21" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="22" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="23" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="24" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="25" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="26" class="gradeA">
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="27" class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td class="center">125.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="28" class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td class="center">312.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="29" class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">419.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="30" class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">522.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="31" class="gradeA">
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td class="center">420</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="32" class="gradeA">
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td class="center">420.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="33" class="gradeA">
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td class="center">413</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="34" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="35" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="36" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="37" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="38" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="39" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="40" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="41" class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="42" class="gradeA">
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="43" class="gradeA">
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td class="center">8.5</td>
                                            <td class="center">C/A<sup>1</sup></td>
                                        </tr>
                                        <tr id="44" class="gradeC">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td class="center">3.1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="45" class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td class="center">3.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="46" class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td class="center">3.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="47" class="gradeX">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr id="48" class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="49" class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="50" class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="51" class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr id="52" class="gradeX">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr id="53" class="gradeX">
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr id="54" class="gradeX">
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr id="55" class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="56" class="gradeC">
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr id="57" class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>-->      
    <script>
    
    </script>
@endsection