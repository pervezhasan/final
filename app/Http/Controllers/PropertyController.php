<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Redirect;
use App\Http\Requests;
/*use App\Http\Controllers\Requests;*/
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
  
    
	public function index(Request $request, Property $property)
    {
		if(\Auth::check()){
		$property['property'] = DB::table('properties')->get();	

        return view('partial.progress.property-home', $property);
		}
		else{
        return redirect('/login');
    }
    }
    public function addItem()
    {
			if(\Auth::check()){
			return view('partial.progress.progress-content');
			}
			else{
			return redirect('/login');
			}
    }

public function update(Request $request, $id){
			$property = Input::all();

        Property::find($id)->update($property);

        return redirect()->route('show')->with('Property Has been updated');
	 	
	

}//close update
	
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responseow
     */
    public function create()
    {

    }
	public function edit($id)
    {
		if(\Auth::check()){
		
        // get the nerd
        $property = Property::find($id);
return view('partial.progress.progress-edit')->with('property', $property);
        // show the edit form and pass the nerd
      }
		else{
        return redirect('/login');
    }
    }
	  /*public function edit($id)
    {
       // get the nerd
        $property = Property::find($id);

        // show the edit form and pass the nerd
        return View::make('partial.progress.progress-show')
            ->with('property', $property);
    }
*/
public function destroy($id) {
    $property  = Property::findOrFail($id);

    $property ->delete();
    return redirect()->route('show');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$property = $this->validate(request(), [
          /*'country' => 'required',
          'numberindividusalhousehold' => 'required|numeric'*/
        ]);
        $property = new Property;
        $property-> country = $request->input('country');
        $property-> zipcode = $request->input('zipcode');
        $property-> powertype = $request->input('powertype');
        $property-> numberindividusalhousehold = $request->input('numberindividusalhousehold') ;
        $property-> own_or_rent = $request->input('own_or_rent');
		$property-> single_or_apartment_or_mobilehome= $request->input('single_or_apartment_or_mobilehome') ;
		$property-> single_detached_or_attached= $request->input('single_detached_or_attached') ;
		
		$property-> apartment_4_unit_or_5_building= $request->input('apartment_4_unit_or_5_building') ;
		
		$property-> year_build = $request->input('year_build');
		$property->square_footage = $request->input('square_footage');
		
		$property->serviceyear = $request->input('serviceyear');
		
		$property->appliances_elec = $request->input('appliances_elec');
		$property->appliances_naturalgas = $request->input('appliances_naturalgas');
		$property->appliances_fuelkarosane = $request->input('appliances_fuelkarosane');
		$property->appliances_wood = $request->input('appliances_wood');
		$property->appliances_propane = $request->input('appliances_propane');
		$property->appliances_wind = $request->input('appliances_wind');
		$property->appliances_hydro = $request->input('appliances_hydro');
		$property->appliances_biomass = $request->input('appliances_biomass');
		$property->appliances_tidal = $request->input('appliances_tidal');
		$property->appliances_nuclear = $request->input('appliances_nuclear');
		
		
		$property->electronics_elec = $request->input('electronics_elec');
		$property->electronics_naturalgas = $request->input('electronics_naturalgas');
		$property->electronics_fuelkarosane = $request->input('electronics_fuelkarosane');
		$property->electronics_wood = $request->input('electronics_wood');
		$property->electronics_propane = $request->input('electronics_propane');
		$property->electronics_wind = $request->input('electronics_wind');
		$property->electronics_hydro = $request->input('electronics_hydro');
		$property->electronics_biomass = $request->input('electronics_biomass');
		$property->electronics_tidal = $request->input('electronics_tidal');
		$property->electronics_nuclear = $request->input('electronics_nuclear');
		
		$property->lighting_elec = $request->input('lighting_elec');
		$property->lighting_naturalgas = $request->input('lighting_naturalgas');
		$property->lighting_fuelkarosane = $request->input('lighting_fuelkarosane');
		$property->lighting_wood = $request->input('lighting_wood');
		$property->lighting_propane = $request->input('lighting_propane');
		$property->lighting_wind = $request->input('lighting_wind');
		$property->lighting_hydro = $request->input('lighting_hydro');
		$property->lighting_biomass = $request->input('lighting_biomass');
		$property->lighting_tidal = $request->input('lighting_tidal');
		$property->lighting_nuclear = $request->input('lighting_nuclear');
		
		$property->spaceheating_elec = $request->input('spaceheating_elec');
		$property->spaceheating_naturalgas = $request->input('spaceheating_naturalgas');
		$property->spaceheating_fuelkarosane = $request->input('spaceheating_fuelkarosane');
		$property->spaceheating_wood = $request->input('spaceheating_wood');
		$property->spaceheating_propane = $request->input('spaceheating_propane');
		$property->spaceheating_wind = $request->input('spaceheating_wind');
		$property->spaceheating_hydro = $request->input('spaceheating_hydro');
		$property->spaceheating_biomass = $request->input('spaceheating_biomass');
		$property->spaceheating_tidal = $request->input('spaceheating_tidal');
		$property->spaceheating_nuclear = $request->input('spaceheating_nuclear');
		
		$property-> airconditioning_elec = $request->input('airconditioning_elec');
		$property->airconditioning_naturalgas = $request->input('airconditioning_naturalgas');
		$property-> airconditioning_fuelkarosane = $request->input('airconditioning_fuelkarosane');
		$property-> airconditioning_wood = $request->input('airconditioning_wood');
		$property-> airconditioning_propane = $request->input('airconditioning_propane');
		$property->airconditioning_wind = $request->input('airconditioning_wind');
		$property->airconditioning_hydro = $request->input('airconditioning_hydro');
		$property-> airconditioning_biomass = $request->input('airconditioning_biomass');
		$property->airconditioning_tidal = $request->input('airconditioning_tidal');
		$property->airconditioning_nuclear = $request->input('airconditioning_nuclear');
		
		$property->waterheating_elec = $request->input('waterheating_elec');
		$property->waterheating_naturalgas = $request->input('waterheating_naturalgas');
		$property->waterheating_fuelkarosane = $request->input('waterheating_fuelkarosane');
		$property->waterheating_wood = $request->input('waterheating_wood');
		$property->waterheating_propane = $request->input('waterheating_propane');
		$property->waterheating_wind = $request->input('waterheating_wind');
		$property->waterheating_hydro = $request->input('waterheating_hydro');
		$property->waterheating_biomass = $request->input('waterheating_biomass');
		$property->waterheating_tidal = $request->input('waterheating_tidal');
		$property->waterheating_nuclear = $request->input('waterheating_nuclear');
       /* $property->priceDay = $request->input('priceDay');
        $property->priceWeek = $request->input('priceWeek');
        $property->priceMonth = $request->input('priceMonth');
        $property->priceYear = $request->input('priceYear');*/
		
		$property->powerusedelectricity = $request->input('powerusedelectricity');
		$property->powerusednaturalgas = $request->input('powerusednaturalgas');
		$property->powerusedpoeloilkarosane = $request->input('powerusedpoeloilkarosane');
		$property->powerusedwood = $request->input('powerusedwood');
		$property->powerusedpropane = $request->input('powerusedpropane');
		$property->powerusedwind = $request->input('powerusedwind');
		$property->powerusedhydro = $request->input('powerusedhydro');
		$property->powerusedbiomass = $request->input('powerusedbiomass');
		$property->powerusedtidal = $request->input('powerusedtidal');
		$property->powerusednuclear = $request->input('powerusednuclear');
		
		
        $property->save();
         return redirect()->route('show');
            
    }
	public function show(){
		if(\Auth::check()){
				$property['property'] = DB::table('properties')->get();
	
				if(count($property) > 0){
					return view('partial.progress.progress-show',$property);
				}
				else
				{
				
					return view ('partial.progress.progress-content'); 
				}
	 
		} else{
        return redirect('/login');
    }
}
}
