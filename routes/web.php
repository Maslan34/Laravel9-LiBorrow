<?php

use App\Http\Controllers\AdminPanel\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use \App\Http\Controllers\AdminPanel\ImageController as AdminImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome',[HomeController::class,'welcome'])->name('welcome');



Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/book/{id}',[HomeController::class,'book'])->name('book_detail');



// 3-Calling Controller
//Route::get('/',[AdminController::class,'index'])->name('home');

// 4-Route->Contreller->View
//Route::get('/',[AdminController::class,'index'])->name('home');

//5-with parameters
//Route::get('/param{}',[AdminController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





//************ADMİN PANEL**********************
Route::prefix('admin')->name('admin.')->group(function () { // php artisan route:list check with this
Route::get('/',[AdminController::class,'indexAdmin'])->name('index');

//************ADMİN PANEL CATEGORY ROUTES**********************
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('','index')->name('index'); //the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/create','create')->name('create');//the path we used here defined at the top as a AdminCategoryContoller
        Route::post('/store','store')->name('store');//the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/edit/{id}','edit')->name('edit');//the path we used here defined at the top as a AdminCategoryContoller
        Route::post('/update/{id}','update')->name('update');//the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/destroy/{id}','destroy')->name('destroy');//the path we used here defined at the top as a AdminCategoryContoller
Route::get('/show/{id}','show'
)->name('show');//the path we used here defined at the top as a AdminCategoryContoller
});
});
//************ADMİN PANEL CATEGORY ROUTES**********************





//************ADMİN BOOK ROUTES**********************
Route::prefix('admin')->name('admin.')->group(function () { // php artisan route:list check with this
    Route::get('/',[AdminController::class,'indexAdmin'])->name('index');

//************ADMİN PANEL CATEGORY ROUTES**********************
    Route::prefix('/book')->name('book.')->controller(BookController::class)->group(function () {
        Route::get('','index')->name('index'); //the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/create','create')->name('create');//the path we used here defined at the top as a AdminCategoryContoller
        Route::post('/store','store')->name('store');//the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/edit/{id}','edit')->name('edit');//the path we used here defined at the top as a AdminCategoryContoller
        Route::post('/update/{id}','update')->name('update');//the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/destroy/{id}','destroy')->name('destroy');//the path we used here defined at the top as a AdminCategoryContoller
        Route::get('/show/{id}','show')->name('show');//the path we used here defined at the top as a AdminCategoryContoller
    });
});

//************ADMİN PANEL CATEGORY ROUTES**********************



//************ADMİN PANEL BOOK IMAGE GALLERY ROUTES**********************
Route::prefix('admin')->name('admin.')->group(function () { // php artisan route:list check with this
    Route::get('/',[AdminController::class,'indexAdmin'])->name('index');

    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
        Route::get('/{bid}','index')->name('index'); //WE NEED BOOK ID HERE
        Route::get('/create/{bid}','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/store/{bid}','store')->name('store');
        Route::post('/update/{bid}/{id}','update')->name('update');
        Route::get('/destroy/{bid}/{id}','destroy')->name('destroy');

        //WE DONT NEED SHOW and EDIT FUNCS.

    });
});
//************ADMİN PANEL BOOK IMAGE GALLERY ROUTES**********************


//************ADMİN PANEL**********************
