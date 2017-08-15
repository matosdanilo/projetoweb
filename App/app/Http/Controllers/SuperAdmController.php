<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use Auth;
class SuperAdmController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function authorized(){
      if(Auth::user()->type != 'sadm'){
        return redirect('home');
      }
    }

    //
    public function index(){
        $this->authorized();

        return view('sadm.dashboard');
    }

    public function adms(){
        $this->authorized();
        $adms = User::all()->where('type','=','adm');
        $companys = Company::all();
        return view('sadm.users.list',compact('adms','companys'));
    }

    public function companies(){
      $this->authorized();
      $companys = Company::all();
      return view('sadm.companies.list',compact('companys'));
    }

    public function edit(){
        return null;
    }

    public function delete(){
        return null;
    }
}
