<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id)
    {
    	return view('admins.edit');
    }

    public function updateprofile(Request $request,$id)
    {
    	$this->validate(request(),[
    		 'name' => ['required', 'string', 'max:255'],
            'address'=>['required','string','max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255'],
           
            'password' => ['required', 'string', 'min:6', ],
    	]);
    	$user=User::find($id);
    	$user->name=$request->name;
    	$user->address=$request->address;
    	//$user->email=$request->email;
    	$user->username=$request->username;

    	
    	$user->password=$request->password;
    	$user->save();
    	return redirect()->to('/home');

    }
}


