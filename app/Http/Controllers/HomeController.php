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
        $user = Auth::user();
        $request->session()->put([  'usuario' =>  $user->name,
                                    'email' => $user->email,
                                    'user_id' => $user->id]);
        $this->session = $request->session()->all();
        $this->user = [ 'usuario' =>  $user->name,
                        'email' => $user->email,
                        'user_id' => $user->id];
        return view('home');
    }

    public function ajax_get_detalle()
    {
        $response = [
            'code' => 201,
            'data' => $this->user
        ];

        return $response;
        //$this->output->set_status_header($response['code'])->set_content_type('application/json', 'utf-8')->set_output($response)->_display();
        //exit;
    }
}
