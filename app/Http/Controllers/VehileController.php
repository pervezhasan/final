<?php

namespace App\Http\Controllers;
use App\Vehile;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Redirect;
use App\Http\Requests;
/*use App\Http\Controllers\Requests;*/
use App\Http\Controllers\Controller;
class VehileController extends Controller
{
    public function index(Request $request, Vehile $vehile)
    {
		if(\Auth::check()){
				$vehile['vehile'] = DB::table('vehiles')->get();	
				return view('partial.vehicle.vehicle-home', $vehile);
		}
		else{
        return redirect('/login');
    }
    }
	 public function addItem()
    {
		if(\Auth::check()){
        return view('partial.vehicle.vehicle-enter');
		}
		else{
        return redirect('/login');
    }
    }
	 public function store(Request $request)
    {
		$vehile = new Vehile;
        $vehile-> make = $request->input('make');
		$vehile-> model = $request->input('model');
		$vehile-> year = $request->input('year');
        $vehile-> powervalue = $request->input('powervalue');
        $vehile-> units = $request->input('units') ;
        $vehile-> miles_driven = $request->input('miles_driven');
	
		 $vehile->save();
		 
		  return redirect()->route('vehicle-home')->with('message' , 'Your Item Added successfully');
         /*return redirect()->route('partial.vehicle.vehicle-home');*/
    }
	public function update(Request $request, $id){
			$vehile = Input::all();

        Vehile::find($id)->update($vehile);

        return redirect()->route('vehicle-home')->with('Vehicle Has been updated');;
}
public function edit($id, Vehile $vehile)
    {
		if(\Auth::check()){
		
        // get the nerd
        $vehile = Vehile::find($id);
		return view('partial.vehicle.vehicle-edit')->with('vehile', $vehile);
        // show the edit form and pass the nerd
      }
		else{
        return redirect('/login');
    }
    }
	
	public function destroy($id) {
    $vehile  = Vehile::findOrFail($id);

    $vehile ->delete();
    return redirect()->route('vehicle-home');
}

}
