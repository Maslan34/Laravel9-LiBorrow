<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function  test(){
        return view('home.test');
    }

    public function  welcome(){
        return view('welcome');
    }

    public function  index(){
        return view('home.index');
    }

}
