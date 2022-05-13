<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function  book($id){


        $book=Book::find($id);
        return view('home.book',['book'=>$book]);
    }

    public function  index(){

        $sliderForBooks=Book::limit(5)->get();
        $datalist=Book::limit(7)->get();

        return view('home.index', ['sliderForBooks'=>$sliderForBooks,'datalist'=>$datalist]);
    }

}
