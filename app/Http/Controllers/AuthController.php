<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view ('register');
    }

    public function register(Request $request){
        //dd($request);
        //dd(request) 
        return view('/welcome2', ['name1'=>$request->first_name, 
        'name2'=>$request->last_name]);
        //return view('/welcome2', ['name'=>$request->last_name]);
    }
}

