<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signinController extends Controller
{
   public function signinAdmin(){
   		return view('signin.signin');
   }
   public function registerAdmin(request $req){
	   	$this->validate($req, [
	   		'username'=>'required',
	   		'password'=>'required | min:6',
	   		're-password'=>'required | min:6',
	   		'email'=>'email',
	   		'phone'=>'phone'
	   	]);
	   	return 'Validate Pass';
   	}
}
