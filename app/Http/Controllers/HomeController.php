<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function  index(){

        $sliderForBooks=Book::limit(5)->get();

        return view('home.index', ['sliderForBooks'=>$sliderForBooks]);
    }

}
