<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $session;
    protected $user;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function ajax_get_detalle()
    {
        $user = Auth::user();
        $response = [
            'code' => 201,
            'data' =>  ['usuario' =>  $user->name,
                        'email' => $user->email,
                        'user_id' => $user->id]
        ];
        return response()->json($response, 200);
    }
}
