<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signinController extends Controller
{
   public function signinAdmin(){
   		return view('signin.signin');
   }
}
