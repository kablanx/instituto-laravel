<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // He tocao aqui
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->login(\Auth::user()->id);
        
    }

    public function inicio(){
        return view("home");
    }

    
    protected function login($id){

        DB::table('logs')->insert(array('id_usuario'=>$id,
        'descripcion'=>'Se ha logueado',
        'created_at' =>date('Y-m-d H:i:s') )
        );
    
        return view('home');
    }

    
}
