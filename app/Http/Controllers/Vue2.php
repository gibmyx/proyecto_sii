<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Vue2 extends Controller
{
    //
    public function index(){

        if(Auth::check()){
            return view('Vue2');
        }else{
            return view('welcome');
        }
        
    }
}
