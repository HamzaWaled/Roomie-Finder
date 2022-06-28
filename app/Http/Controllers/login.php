<?php

namespace App\Http\Controllers;

use Session;
use App\Class\Traitment;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
	
	  public function index()
			    {
			        if(!Auth::check()){
			            return view('User.login');
			        }else{
			            return redirect()->route('Main_page'); //first page to show up in the application 
			        }
			    	
			    }
			    public function store(Request $req){
			    	//return $req->input();
			        //client is model
			    	$user= User::where(['email'=>$req->email])->first();
			    	if(Auth::attempt(['email'=>$req->email,'password'=>$req->psw])){
			            
			           return redirect()->route('Main_page');
			        }else{
			            // echo ("wrong password");
			            
			            session::flash('Error','incorrect password');
			            
			            return redirect()->back();

			        }
			    }
			    public function logout()
			    {
			        # code..
			        Auth::logout();
			        return redirect()->route('login_index');
			    }
			
}
