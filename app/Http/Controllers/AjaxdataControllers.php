<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
/*use App\User;*/
use App\Property;
use Datatables;

class AjaxdataController extends Controller{
	function index(){
		return view('ajaxdata');
	}
	function getdata()
    {
     $property = Property::select(
	 'id',  
	 'country',
        'zipcode',
		'powertype',
		'numberindividusalhousehold',
		'own_or_rent',
        'single_or_apartment_or_mobilehome',
			'single_detached_or_attached',
			
			'apartment_4_unit_or_5_building',

			'year_build',
			'square_footage',

			'serviceyear',
			
			'appliances_elec',
			'appliances_naturalgas',
			'appliances_fuelkarosane',
			'appliances_wood',
			'appliances_propane',
			'appliances_wind',
			'appliances_hydro',
			'appliances_biomass',
			'appliances_tidal',
			'appliances_nuclear',
			
			'electronics_elec',
			'electronics_naturalgas',
			'electronics_fuelkarosane',
			'electronics_wood',
			'electronics_propane',
			'electronics_wind',
			'electronics_hydro',
			'electronics_biomass',
			'electronics_tidal',
			'electronics_nuclear',
			
			'lighting_elec',
			'lighting_naturalgas',
			'lighting_fuelkarosane',
			'lighting_wood',
			'lighting_propane',
			'lighting_wind',
			'lighting_hydro',
			'lighting_biomass',
			'lighting_tidal',
			'lighting_nuclear',
			
			'spaceheating_elec',
			'spaceheating_naturalgas',
			'spaceheating_fuelkarosane',
			'spaceheating_wood',
			'spaceheating_propane',
			'spaceheating_wind',
			'spaceheating_hydro',
			'spaceheating_biomass',
			'spaceheating_tidal',
			'spaceheating_nuclear',
			
			'airconditioning_elec',
			'airconditioning_naturalgas',
			'airconditioning_fuelkarosane',
			'airconditioning_wood',
			'airconditioning_propane',
			'airconditioning_wind',
			'airconditioning_hydro',
			'airconditioning_biomass',
			'airconditioning_tidal',
			'airconditioning_nuclear',
			
			'waterheating_elec',
			'waterheating_naturalgas',
			'waterheating_fuelkarosane',
			'waterheating_wood',
			'waterheating_propane',
			'waterheating_wind',
			'waterheating_hydro',
			'waterheating_biomass',
			'waterheating_tidal',
			'waterheating_nuclear');
			
     return Datatables::of($property)
            ->addColumn('action', function($property){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$property->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
    }
	function fetchdata(Request $request)
    {
		
        $id = $request->get('id');
		$property= Property::all()->toArray();
        $property = Property::find($id);
        $output = array(
		/*'name'    =>  $user->name,
            'email'     =>  $user->email*/
			
		'country' =>  $property->country['text'],
        'zipcode' =>  $property->zipcode,
		'powertype' =>  $property->powertype,
		'numberindividusalhousehold' =>  $property->numberindividusalhousehold,
		'own_or_rent' =>  $property->own_or_rent,
        'single_or_apartment_or_mobilehome' =>  $property->single_or_apartment_or_mobilehome,
			'single_detached_or_attached' =>  $property->single_detached_or_attached,
			
			'apartment_4_unit_or_5_building' =>  $property->apartment_4_unit_or_5_building,

			'year_build' =>  $property->year_build,
			'square_footage' =>  $property->square_footage,

			'serviceyear' =>  $property->serviceyear,
			
			'appliances_elec' =>  $property->appliances_elec,
			'appliances_naturalgas' =>  $property->appliances_naturalgas,
			'appliances_fuelkarosane' =>  $property->appliances_fuelkarosane,
			'appliances_wood' =>  $property->appliances_wood,
			'appliances_propane' =>  $property->appliances_propane,
			'appliances_wind' =>  $property->appliances_wind,
			'appliances_hydro' =>  $property->appliances_hydro,
			'appliances_biomass' =>  $property->appliances_biomass,
			'appliances_tidal' =>  $property->appliances_tidal,
			'appliances_nuclear' =>  $property->appliances_nuclear,
			
			'electronics_elec' =>  $property->electronics_elec,
			'electronics_naturalgas' =>  $property->electronics_naturalgas,
			'electronics_fuelkarosane' =>  $property->electronics_fuelkarosane,
			'electronics_wood' =>  $property->electronics_wood,
			'electronics_propane' =>  $property->electronics_propane,
			'electronics_wind' =>  $property->electronics_wind,
			'electronics_hydro' =>  $property->electronics_hydro,
			'electronics_biomass' =>  $property->electronics_biomass,
			'electronics_tidal' =>  $property->electronics_tidal,
			'electronics_nuclear' =>  $property->electronics_nuclear,
			
			'lighting_elec' =>  $property->lighting_elec,
			'lighting_naturalgas' =>  $property->lighting_naturalgas,
			'lighting_fuelkarosane' =>  $property->lighting_fuelkarosane,
			'lighting_wood' =>  $property->lighting_wood,
			'lighting_propane' =>  $property->lighting_propane,
			'lighting_wind' =>  $property->lighting_wind,
			'lighting_hydro' =>  $property->lighting_hydro,
			'lighting_biomass' =>  $property->lighting_biomass,
			'lighting_tidal' =>  $property->lighting_tidal,
			'lighting_nuclear' =>  $property->lighting_nuclear,
			
			'spaceheating_elec' =>  $property->spaceheating_elec,
			'spaceheating_naturalgas' =>  $property->spaceheating_naturalgas,
			'spaceheating_fuelkarosane' =>  $property->spaceheating_fuelkarosane,
			'spaceheating_wood' =>  $property->spaceheating_wood,
			'spaceheating_propane' =>  $property->spaceheating_propane,
			'spaceheating_wind' =>  $property->spaceheating_wind,
			'spaceheating_hydro' =>  $property->spaceheating_hydro,
			'spaceheating_biomass' =>  $property->spaceheating_biomass,
			'spaceheating_tidal' =>  $property->spaceheating_tidal,
			'spaceheating_nuclear' =>  $property->spaceheating_nuclear,
			
			'airconditioning_elec' =>  $property->airconditioning_elec,
			'airconditioning_naturalgas' =>  $property->airconditioning_naturalgas,
			'airconditioning_fuelkarosane' =>  $property->airconditioning_fuelkarosane,
			'airconditioning_wood' =>  $property->airconditioning_wood,
			'airconditioning_propane' =>  $property->airconditioning_propane,
			'airconditioning_wind' =>  $property->airconditioning_wind,
			'airconditioning_hydro' =>  $property->airconditioning_hydro,
			'airconditioning_biomass' =>  $property->airconditioning_biomass,
			'airconditioning_tidal' =>  $property->airconditioning_tidal,
			'airconditioning_nuclear' =>  $property->airconditioning_nuclear,
			
			'waterheating_elec' =>  $property->waterheating_elec,
			'waterheating_naturalgas' =>  $property->waterheating_naturalgas,
			'waterheating_fuelkarosane' =>  $property->waterheating_fuelkarosane,
			'waterheating_wood' =>  $property->waterheating_wood,
			'waterheating_propane' =>  $property->waterheating_propane,
			'waterheating_wind' =>  $property->waterheating_wind,
			'waterheating_hydro' =>  $property->waterheating_hydro,
			'waterheating_biomass' =>  $property->waterheating_biomass,
			'waterheating_tidal' =>  $property->waterheating_tidal,
			'waterheating_nuclear'  =>  $property->waterheating_nuclear,
        );
        echo json_encode($output);
    }
    function postdata(Request $request){
        $validation = Validator::make($request->all(), [
			/*'year_build'  -> 'required',
			'square_footage'  -> 'required',
			'serviceyear' ->   -> 'required'*/
        ]);
        
        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach ($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages; 
            }
        }
        else
        {
            if($request->get('button_action') == 'insert')
            {
				 $property = new Property([
				 'country' =>  $property->get('country'),
        'zipcode' =>  $property->get('zipcode'),
		'powertype' =>  $property->get('powertype'),
        'numberindividusalhousehold' =>$request->get('numberindividusalhousehold'),
        'own_or_rent' =>$request->get('own_or_rent')?: 1,
		'single_or_apartment_or_mobilehome' =>$request->get('single_or_apartment_or_mobilehome'),
		'single_detached_or_attached' => $request->get('single_detached_or_attached'),
		
		'apartment_4_unit_or_5_building' =>$request->get('apartment_4_unit_or_5_building'),
		
		'year_build' =>$request->get('year_build'),
		'square_footage' =>$request->get('square_footage'),
		
		'serviceyear' =>$request->get('serviceyear'),
		
		'appliances_elec' =>$request->get('appliances_elec') ?: 00.00 ,
		'appliances_naturalgas' =>$request->get('appliances_naturalgas') ?: 00.00 ,
		'appliances_fuelkarosane' =>$request->get('appliances_fuelkarosane') ?: 00.00 ,
		'appliances_wood' =>$request->get('appliances_wood') ?: 00.00 ,
		'appliances_propane' =>$request->get('appliances_propane') ?: 00.00 ,
		'appliances_wind' =>$request->get('appliances_wind') ?: 00.00 ,
		'appliances_hydro' =>$request->get('appliances_hydro') ?: 00.00 ,
		'appliances_biomass' =>$request->get('appliances_biomass') ?: 00.00 ,
		'appliances_tidal' =>$request->get('appliances_tidal') ?: 00.00 ,
		'appliances_nuclear' =>$request->get('appliances_nuclear') ?: 00.00 ,
		
		
		'electronics_elec' =>$request->get('electronics_elec') ?: 00.00 ,
		'electronics_naturalgas' =>$request->get('electronics_naturalgas') ?: 00.00 ,
		'electronics_fuelkarosane' =>$request->get('electronics_fuelkarosane') ?: 00.00 ,
		'electronics_wood' =>$request->get('electronics_wood') ?: 00.00 ,
		'electronics_propane' =>$request->get('electronics_propane') ?: 00.00 ,
		'electronics_wind' =>$request->get('electronics_wind') ?: 00.00 ,
		'electronics_hydro' =>$request->get('electronics_hydro') ?: 00.00 ,
		'electronics_biomass' =>$request->get('electronics_biomass') ?: 00.00 ,
		'electronics_tidal' =>$request->get('electronics_tidal') ?: 00.00 ,
		'electronics_nuclear' =>$request->get('electronics_nuclear') ?: 00.00 ,
		
		'lighting_elec' =>$request->get('lighting_elec') ?: 00.00 ,
		'lighting_naturalgas' =>$request->get('lighting_naturalgas') ?: 00.00 ,
		'lighting_fuelkarosane' =>$request->get('lighting_fuelkarosane') ?: 00.00 ,
		'lighting_wood' =>$request->get('lighting_wood') ?: 00.00 ,
		'lighting_propane' =>$request->get('lighting_propane') ?: 00.00 ,
		'lighting_wind' =>$request->get('lighting_wind') ?: 00.00 ,
		'lighting_hydro' =>$request->get('lighting_hydro') ?: 00.00 ,
		'lighting_biomass' =>$request->get('lighting_biomass') ?: 00.00 ,
		'lighting_tidal' =>$request->get('lighting_tidal') ?: 00.00 ,
		'lighting_nuclear' =>$request->get('lighting_nuclear') ?: 00.00 ,
		
		'spaceheating_elec' =>$request->get('spaceheating_elec') ?: 00.00 ,
		'spaceheating_naturalgas' =>$request->get('spaceheating_naturalgas') ?: 00.00 ,
		'spaceheating_fuelkarosane' =>$request->get('spaceheating_fuelkarosane') ?: 00.00 ,
		'spaceheating_wood' =>$request->get('spaceheating_wood') ?: 00.00 ,
		'spaceheating_propane' =>$request->get('spaceheating_propane') ?: 00.00 ,
		'spaceheating_wind' =>$request->get('spaceheating_wind') ?: 00.00 ,
		'spaceheating_hydro' =>$request->get('spaceheating_hydro') ?: 00.00 ,
		'spaceheating_biomass' =>$request->get('spaceheating_biomass') ?: 00.00 ,
		'spaceheating_tidal' =>$request->get('spaceheating_tidal') ?: 00.00 ,
		'spaceheating_nuclear' =>$request->get('spaceheating_nuclear') ?: 00.00 ,
		
		'airconditioning_elec' =>$request->get('airconditioning_elec') ?: 00.00 ,
		'airconditioning_naturalgas' =>$request->get('airconditioning_naturalgas') ?: 00.00 ,
		'airconditioning_fuelkarosane' =>$request->get('airconditioning_fuelkarosane') ?: 00.00 ,
		'airconditioning_wood' =>$request->get('airconditioning_wood') ?: 00.00 ,
		'airconditioning_propane' =>$request->get('airconditioning_propane') ?: 00.00 ,
		'airconditioning_wind' =>$request->get('airconditioning_wind') ?: 00.00 ,
		'airconditioning_hydro' =>$request->get('airconditioning_hydro') ?: 00.00 ,
		'airconditioning_biomass' =>$request->get('airconditioning_biomass') ?: 00.00 ,
		'airconditioning_tidal' =>$request->get('airconditioning_tidal') ?: 00.00 ,
		'airconditioning_nuclear' =>$request->get('airconditioning_nuclear') ?: 00.00 ,
		
		'waterheating_elec' =>$request->get('waterheating_elec') ?: 00.00 ,
		'waterheating_naturalgas' =>$request->get('waterheating_naturalgas') ?: 00.00 ,
		'waterheating_fuelkarosane' =>$request->get('waterheating_fuelkarosane') ?: 00.00 ,
		'waterheating_wood' =>$request->get('waterheating_wood') ?: 00.00 ,
		'waterheating_propane' =>$request->get('waterheating_propane') ?: 00.00 ,
		'waterheating_wind' =>$request->get('waterheating_wind') ?: 00.00 ,
		'waterheating_hydro' =>$request->get('waterheating_hydro') ?: 00.00 ,
		'waterheating_biomass' =>$request->get('waterheating_biomass') ?: 00.00 ,
		'waterheating_tidal' =>$request->get('waterheating_tidal') ?: 00.00 ,
		'waterheating_nuclear' =>$request->get('waterheating_nuclear') ?: 00.00 ,
       /* 'priceDay' =>$request->get('priceDay') ?: 00.00 ,
        'priceWeek' =>$request->get('priceWeek') ?: 00.00 ,
        'priceMonth' =>$request->get('priceMonth') ?: 00.00 ,
        'priceYear' =>$request->get('priceYear'),*/
		
		'powerusedelectricity' =>$request->get('powerusedelectricity') ?: 'MWh',
		'powerusednaturalgas' =>$request->get('powerusednaturalgas') ?: 'Cubic ft' ,
		'powerusedpoeloilkarosane' =>$request->get('powerusedpoeloilkarosane') ?: 'Gals' ,
		'powerusedwood' =>$request->get('powerusedwood') ?: 'cubic feet' ,
		'powerusedpropane' =>$request->get('powerusedpropane') ?: 'Cubic ft' ,
		'powerusedwind' =>$request->get('powerusedwind') ?: 'Toe' ,
		'powerusedhydro' =>$request->get('powerusedhydro') ?: 'MWh' ,
		'powerusedbiomass' =>$request->get('powerusedbiomass') ?: 'Cubic ft' ,
		'powerusedtidal' =>$request->get('powerusedtidal') ?: 'MWh' ,
		'powerusednuclear' =>$request->get('powerusednuclear') ?: 'MWh' ,
/*                    'name'    =>  $request->get('name'),
                    'email'     =>  $request->get('email')*/
                ]);
                $property->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if($request->get('button_action') == 'update')
            {
                $property =Property::find($request->get('id'));
				$property->country= $request->get('country');
				$property->zipcode= $request->get('zipcode');
				$property->powertype= $request->get('powertype');
				
				$property-> numberindividusalhousehold  =   $request->get('numberindividusalhousehold') ?: 'N/A';
        $property->own_or_rent =  $request->get('own_or_rent');
		$property->single_or_apartment_or_mobilehome  = $request->get('single_or_apartment_or_mobilehome') ?: 'N/A';
		$property->single_detached_or_attached  =  $request->get('single_detached_or_attached') ?: 'N/A';
		
		$property->apartment_4_unit_or_5_building  =  $request->get('apartment_4_unit_or_5_building') ?: 'N/A';
		
		$property->year_build = $request->get('year_build');
		$property->square_footage = $request->get('square_footage');
		
		$property->serviceyear  = $request->get('serviceyear');
		
		$property->appliances_elec  = $request->get('appliances_elec') ?: 00.00;
		$property->appliances_naturalgas = $request->get('appliances_naturalgas') ?: 00.00;
		$property->appliances_fuelkarosane = $request->get('appliances_fuelkarosane') ?: 00.00;
		$property->appliances_wood = $request->get('appliances_wood') ?: 00.00;
		$property->appliances_propane = $request->get('appliances_propane') ?: 00.00 ;
		$property->appliances_wind = $request->get('appliances_wind') ?: 00.00 ;
		$property->appliances_hydro = $request->get('appliances_hydro') ?: 00.00 ;
		$property->appliances_biomass = $request->get('appliances_biomass') ?: 00.00;
		$property->appliances_tidal = $request->get('appliances_tidal') ?: 00.00;
		$property->appliances_nuclear = $request->get('appliances_nuclear') ?: 00.00 ;
		
		
		$property->electronics_elec = $request->get('electronics_elec') ?: 00.00;
		$property->electronics_naturalgas = $request->get('electronics_naturalgas') ?: 00.00 ;
		$property->electronics_fuelkarosane = $request->get('electronics_fuelkarosane') ?: 00.00 ;
		$property->electronics_wood = $request->get('electronics_wood') ?: 00.00;
		$property->electronics_propane = $request->get('electronics_propane') ?: 00.00 ;
		$property->electronics_wind =  $request->get('electronics_wind') ?: 00.00 ;
		$property->electronics_hydro = $request->get('electronics_hydro') ?: 00.00;
		$property->electronics_biomass = $request->get('electronics_biomass') ?: 00.00 ;
		$property->electronics_tidal = $request->get('electronics_tidal') ?: 00.00;
		$property->electronics_nuclear =  $request->get('electronics_nuclear') ?: 00.00 ;
		
		$property->lighting_elec  = $request->get('lighting_elec') ?: 00.00 ;
		$property->lighting_naturalgas = $request->get('lighting_naturalgas') ?: 00.00;
		$property->lighting_fuelkarosane = $request->get('lighting_fuelkarosane') ?: 00.00;
		$property->lighting_wood  = $request->get('lighting_wood') ?: 00.00;
		$property->lighting_propane = $request->get('lighting_propane') ?: 00.00;
		$property->lighting_wind = $request->get('lighting_wind') ?: 00.00 ;
		$property->lighting_hydro =  $request->get('lighting_hydro') ?: 00.00;
		$property->lighting_biomass =  $request->get('lighting_biomass') ?: 00.00;
		$property->lighting_tidal = $request->get('lighting_tidal') ?: 00.00 ;
		$property->lighting_nuclear =  $request->get('lighting_nuclear') ?: 00.00 ;
		
		$property->spaceheating_elec = $request->get('spaceheating_elec') ?: 00.00;
		$property->spaceheating_naturalgas = $request->get('spaceheating_naturalgas') ?: 00.00;
		$property->spaceheating_fuelkarosane = $request->get('spaceheating_fuelkarosane') ?: 00.00;
		$property->spaceheating_wood = $request->get('spaceheating_wood') ?: 00.00;
		$property->spaceheating_propane = $request->get('spaceheating_propane') ?: 00.00;
		$property->spaceheating_wind = $request->get('spaceheating_wind') ?: 00.00 ;
		$property->spaceheating_hydro = $request->get('spaceheating_hydro') ?: 00.00 ;
		$property->spaceheating_biomass = $request->get('spaceheating_biomass') ?: 00.00;
		$property->spaceheating_tidal = $request->get('spaceheating_tidal') ?: 00.00;
		$property->spaceheating_nuclear = $request->get('spaceheating_nuclear') ?: 00.00;
		
		$property->airconditioning_elec = $request->get('airconditioning_elec') ?: 00.00;
		$property->airconditioning_naturalgas = $request->get('airconditioning_naturalgas') ?: 00.00;
		$property->airconditioning_fuelkarosane = $request->get('airconditioning_fuelkarosane') ?: 00.00 ;
		$property->airconditioning_wood = $request->get('airconditioning_wood') ?: 00.00;
		$property->airconditioning_propane = $request->get('airconditioning_propane') ?: 00.00 ;
		$property->airconditioning_wind = $request->get('airconditioning_wind') ?: 00.00 ;
		$property->airconditioning_hydro = $request->get('airconditioning_hydro') ?: 00.00 ;
		$property->airconditioning_biomass = $request->get('airconditioning_biomass') ?: 00.00;
		$property->airconditioning_tidal = $request->get('airconditioning_tidal') ?: 00.00;
		$property->airconditioning_nuclear  = $request->get('airconditioning_nuclear') ?: 00.00;
		
		$property->waterheating_elec  = $request->get('waterheating_elec') ?: 00.00;
		$property->waterheating_naturalgas = $request->get('waterheating_naturalgas') ?: 00.00 ;
		$property->waterheating_fuelkarosane  = $request->get('waterheating_fuelkarosane') ?: 00.00 ;
		$property->waterheating_wood = $request->get('waterheating_wood') ?: 00.00;
		$property->waterheating_propane  = $request->get('waterheating_propane') ?: 00.00 ;
		$property->waterheating_wind = $request->get('waterheating_wind') ?: 00.00 ;
		$property->waterheating_hydro = $request->get('waterheating_hydro') ?: 00.00 ;
		$property->waterheating_biomass = $request->get('waterheating_biomass') ?: 00.00 ;
		$property->waterheating_tidal = $request->get('waterheating_tidal') ?: 00.00;
		$property->waterheating_nuclear =  $request->get('waterheating_nuclear') ?: 00.00 ;
   
		
		$property->powerusedelectricity  =  $request->get('powerusedelectricity') ?: 'MWh';
		$property->powerusednaturalgas =   $request->get('powerusednaturalgas') ?: 'Cubic ft';
		$property->powerusedpoeloilkarosane =  $request->get('powerusedpoeloilkarosane') ?: 'Gals';
		$property->powerusedwood  =  $request->get('powerusedwood') ?: 'cubic feet';
		$property->powerusedpropane  =  $request->get('powerusedpropane') ?: 'Cubic ft';
		$property->powerusedwind  =  $request->get('powerusedwind') ?: 'Toe';
		$property->powerusedhydro  =  $request->get('powerusedhydro') ?: 'MWh' ;
		$property->powerusedbiomass =   $request->get('powerusedbiomass') ?: 'Cubic ft';
		$property->powerusedtidal  =   $request->get('powerusedtidal') ?: 'MWh' ;
		$property->powerusednuclear =   $request->get('powerusednuclear') ?: 'MWh';
				
				
				
               /* $property->name = $request->get('name');
                $property->email = $request->get('email');*/
                $property->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            }
            
        }
        
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }


}

