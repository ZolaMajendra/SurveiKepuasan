<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasAuditorController extends Controller
{
    //
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eas.auditorhome');
    }

    public function showIdentitasForm(){
    	return view('eas.identitasform');
    }
}
