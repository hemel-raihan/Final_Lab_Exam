<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){

		/*$user  = User::where('username', $req->username)
                        ->where('password', $req->password)
						->first();*/
						$user = DB::table('Users')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->get();
		//$user = User::all();
		//echo count($user);
		//echo $user['username'];
						if(count($user) > 0){

			$req->session()->put('username', $req->username);
			return redirect('/home');
						}
						else{
							$req->session()->flash('msg', 'invalid username/password');
							return redirect('/login');
						}
    	
	
    	
    }
}
