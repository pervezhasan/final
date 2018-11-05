<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	 public function profile(User $user){
        return view('users.index')->with('user',$user);
    }
    /*public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }*/

    public function store(UsersDataTablesEditor $editor)
    {
        return $editor->process(request());
    }
	
	    public function getUsers()

    {

        $users = User::all();

        return view('users.index',compact('users'));

    }


    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function updateUser(Request $request, User $user, $Id)

    {

        User::find($request->pk)->update([$request->name => $request->value]);

        return response()->json(['success'=>'done']);

    }
}