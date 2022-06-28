<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Class\Traitment;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    
    public function Register()
    {
    	
    	
    	return view('user.register');
    }
    public function Storing(Request $request){
        
        $user_registration = new User();
        
        $user_registration->Name =$request->NameForm; 
        $user_registration->PhoneNumber =$request->PhoneNumberForm;
        $user_registration->Gender =$request->GenderForm; 
        $user_registration->City =$request->CityForm;
        $user_registration->BithDate =$request->BirthDateForm;
        $user_registration->Email =$request->EmailForm; 
        $user_registration->Password =$request->PasswordForm;
        $user_registration->Category ='2';
        //CATEGORY 2 ==> user
        //CATEGORY 1 ==> admin (implemented manually)
       
        $user_registration->save();

        session::flash('success','Succès');
        return redirect()->route('login_index');
    }

     public function MainPage(){
        return view('Main.view');
    }
    public function passwordforget(){
        
        return view('User.ChangePsw');
    }   
       public function changepassword(Request $req)
       {
        
        $Traitment = new Traitment();
        $exist_email = User::where('Email',$req->email)->get()->count();

        
        if($exist_email!=0){
            $random = Str::random(6);
            $l = $random;
            $id_user = User::where('Email',$req->email)->first();

            $update = User::find($id_user->id);

            $update->password=$random;
            $update->save();
            // dd($req->email);

            if($Traitment->SendEmail($id_user->Name,"As requested ",$random,$id_user->Email)){
             
            }else{

            }


            session::flash('success',"Succès"); 
        }else{
            session::flash('Error','Email n existe pas');/// not exist
        }
        return view('User.login');
       }
}
