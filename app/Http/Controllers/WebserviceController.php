<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Support\Webservices;
use App\Support\Helpers;
use Illuminate\Support\Facades\Session;

use Illuminate\Routing\Controller as BaseController;

class WebserviceController extends Controller
{
    /*public function getSession(){
            $session = Webservices::getSession();
            return $session;
    }*/
    public function dob(){
        return view('dobLog');
    }

    public function doblog(){
        return view('dobPrijava');
    }
    public function Dprijava(Request $request){
        dd($request->all());
        return redirect('/');
    }

    public function dobdata(){
        return view('oprData');
        }
    public function Dpodatki(Request $request){
        dd($request->all());
        return redirect('/');
    }

    public function opr(){
        return view('oprLog');
    }

    public function oprlog(){
        return view('oprPrijava');
    }
    public function Oprijava(Request $request){
        dd($request->all());
        return redirect('/');
    }

    public function oprdata(){
        return view('oprData');
    }
    public function Opodatki(Request $request){
        dd($request->all());
        return redirect('/');
    }
}
