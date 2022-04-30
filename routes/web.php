<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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

Route::get('/', function () {
    return view('layouts.frontbase');
});

Route::get('/test',[HomeController::class,'test'])->name('test');



// 3-Calling Controller
//Route::get('/',[AdminController::class,'index'])->name('home');

// 4-Route->Contreller->View
//Route::get('/',[AdminController::class,'index'])->name('home');

//5-with parameters
Route::get('/param{}',[AdminController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




//************ADMİN PANEL**********************
Route::get('/admin',[AdminController::class,'indexAdmin'])->name('admin');

//************ADMİN PANEL CATEGORY ROUTES**********************
Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('admin_category'); //the path we used here defined at the top as a AdminCategoryContoller
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');//the path we used here defined at the top as a AdminCategoryContoller
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');//the path we used here defined at the top as a AdminCategoryContoller
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');//the path we used here defined at the top as a AdminCategoryContoller
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');//the path we used here defined at the top as a AdminCategoryContoller
Route::get('/admin/category/show/{id}',[AdminCategoryController::class,'show'])->name('admin_category_show');//the path we used here defined at the top as a AdminCategoryContoller



//************ADMİN PANEL**********************
