<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
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
        if(Auth::user()->type == "fun"){
          return redirect('Funcionario/Home');
        }else if(Auth::user()->type == "client"){
          return redirect('Cliente/Home');
        }else if(Auth::user()->type == "adm"){
          return redirect('dm/Dashboard');
        }else if(Auth::user()->type == "sadm"){
          return redirect('SAdm/Dashboard');
        }else{
          return redirect('login');
        }
    }
}
