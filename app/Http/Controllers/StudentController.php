<?php

namespace App\Http\Controllers;
use App\Student;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
	 public function index() {
		  return view('students.index');
	 }
	 public function show() {
			$student = Student::all ();
			return view ( 'students.view' )->withStudent ( $student );
		  /*return view('students.view');
		  $student['student'] = DB::table('students')->get();*/
	 }
    public function addItem(Request $request) {
		$rules = array (
			'first_name' => 'required',
			'email' => 'required|string|email|max:255|unique:students',
		);
	/*$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ())
		return Response::json ( array (
		'errors' => $validator->getMessageBag ()->toArray ()
		) );
	else {*/
	$student = new Student ();
	$student->first_name = $request->first_name;
	$student->last_name = $request->last_name;
	$student->email = $request->email;
	$student->gender = $request->gender;
	$student->age = $request->age;
	$student->session = $request->session;
	$student->save ();
	return view('students.view');
	}
	 public function editItem(Request $request) 
	{
		$rules = array (
            'firs_tname' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'gender' => 'required'
		);
    /*$validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {*/
        
        $student = Student::find ( $request->id );
        $student->first_name = ($request->first_name);
        $student->last_name = ($request->last_name);
        $student->email = ($request->email);
        $student->gender = ($request->gender);
        $student->age = ($request->age);
        $student->session = ($request->session);
        $student->save ();
        return view('students.view');
    }

	/*}*/
}
