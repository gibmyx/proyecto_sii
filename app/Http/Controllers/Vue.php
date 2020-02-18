<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Vue extends Controller
{
    //
    public function index(){

        if(Auth::check()){
            return view('Vue');
        }else{
            return view('welcome');
        }
        
    }
}
