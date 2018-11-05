<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroceryController extends Controller
{
	public function index(Request $request)
 {
        
        return view('grocery');
 }

	public function store(Request $request)
 {
        $grocery = new Grocery();
        $grocery->name = $request->name;
        $grocery->type = $request->type;
        $grocery->price = $request->price;

        $grocery->save();
        return response()->json(['success'=>'Data is successfully added']);
 }

}


