<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EnterController extends Controller{
	
   public function insertform(){
      return view('enter');
   }
	
   public function insert(Request $request){
      $country = $request->input('country');
	  $zipcode = $request->input('zipcode');
      DB::insert('insert into enterinfo (country) values(?)',[$country]);
	  DB::insert('insert into enterinfo (zipcode) values(?)',[$zipcode]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
