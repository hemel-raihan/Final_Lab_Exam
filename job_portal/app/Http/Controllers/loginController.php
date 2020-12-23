<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){

		$user  = User::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();
		

			$req->session()->put('username', $req->username);
			return redirect('/home');
		
    	
	
    	
    }
}
