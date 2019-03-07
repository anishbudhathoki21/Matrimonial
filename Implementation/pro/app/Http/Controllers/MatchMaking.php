<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class MatchMaking extends Controller
{

	public function index()
	{
		$users=new User();
		$users=$users->get();
		return view('matchmaking',[
			 'users'=>$users

		]); 
	}
    public function matchmaking(Request $request){
    	
    	$search=$request->get('search');
    }
}
