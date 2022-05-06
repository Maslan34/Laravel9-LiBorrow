<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{


    protected $appends =['getParentTree'];

    public static function getParentTree($category, $title){
        if ($category->parent_id == 0){
            return $title;
        }

        $parent = Category::find($category->parent_id);
        $title=$parent->title.'>'.$title;

        return CategoryController::getParentTree($parent,$title);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Book::all();// getting data from data base
        return view('admin.book.adminBookIndex',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Category::all();// NOT BOOK MODEL
        return view('admin.book.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Book();
        $data->user_id =0;
        $data->title =$request->title;
        //$data->detail =$request->detail;
        $data->category_id =$request->category_id;
        $data->pages =$request->pages;
        $data->price =$request->price;
        $data->quantitiy =$request->quantitiy;
        $data->min_quantitiy =$request->min_quantitiy;
        $data->comission_rate =$request->comission_rate;
        $data->rates =$request->rates;
        $data->author =$request->author;
        $data->year_of_publication =$request->year_of_publication;
        $data->awards_taken =$request->awards_taken;
        $data->parent_id =$request->parent_id;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->status =$request->status;
        if($request->file('image')){ // for image uploading
            $data->image=$request->file('image')->store('images');

        }

        $data->save();
        return  redirect('/admin/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $Book,$id)
    {
        $data= Book::find($id);
        return view('admin.book.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $Book,$id)
    {
        $data= Book::find($id);// getting data from data base by using id
        $datalist= Category::all(); //NOT BOOK MODEL
        return view('admin.book.edit',['data' => $data, 'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $Book,$id)
    {
        $data= Book::find($id);
        $data->user_id =0;
        $data->title =$request->title;
        $data->detail =$request->detail;
        $data->category_id =$request->category_id;
        $data->pages =$request->pages;
        $data->price =$request->price;
        $data->quantitiy =$request->quantitiy;
        $data->min_quantitiy =$request->min_quantitiy;
        $data->comission_rate =$request->comission_rate;
        $data->rates =$request->rates;
        $data->author =$request->author;
        $data->year_of_publication =$request->year_of_publication;
        $data->awards_taken =$request->awards_taken;
        $data->parent_id =$request->parent_id;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->status =$request->status;
        if($request->file('image')){ // for image uploading
            $data->image=$request->file('image')->store('images');

        }
        $data->save();
        return  redirect('/admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $Book,$id)
    {
        $data=Book::find($id);
        if($data->image){
            Storage::delete($data->image);
        }
        $data->delete();
        return  redirect('/admin');
    }
}


