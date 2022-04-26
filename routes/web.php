<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;

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
Route::get('/admin/category',[\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[\App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name('admin_category_store');



//************ADMİN PANEL**********************
