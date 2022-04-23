<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function  test(){
        return view('home.test');
    }

    public function  welcome(){
        return view('home.index.blade');
    }

    public function  param(){
        return view('home.test');
    }
}
