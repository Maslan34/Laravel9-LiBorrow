<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test',[HomeController::class,'test'])->name('test');



// 3-Calling Controller
//Route::get('/',[HomeController::class,'index'])->name('home');

// 4-Route->Contreller->View
//Route::get('/',[HomeController::class,'index'])->name('home');

//5-with parameters
Route::get('/param{}',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
