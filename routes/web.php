<?php

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
Route::resource('customers', App\Http\Controllers\customerController::class); //->middleware('auth'); for locking directly from route

Route::get('/', function () {
    return view('layout');
    
});
Route::get('/home', function () {
    return view('home');
    
});
/*

Route::get('customers/index',[App\Http\Controllers\customerController::class,'index']);
Route::get('customers/create',[App\Http\Controllers\customerController::class,'create']);
Route::post('/customers',[App\Http\Controllers\customerController::class,'store']);
Route::get('customers/{customer}',[App\Http\Controllers\customerController::class,'show']);
Route::get('customers/{customer}/edit',[App\Http\Controllers\customerController::class,'edit']);
Route::patch('customers/{customer}',[App\Http\Controllers\customerController::class,'update']);
Route::delete('customers/{customer}',[App\Http\Controllers\customerController::class,'destroy']);*/
Route::get('students/index',[App\Http\Controllers\studentController::class,'index']);
Route::get('students/create',[App\Http\Controllers\studentController::class,'create']);
//Route::view('students/create','students\create');
Route::post('/students', [App\Http\Controllers\studentController::class,'store'])->name('students.store');
Route::get('students/{student}',[App\Http\Controllers\studentController::class,'show']);
Route::get('students/{student}/edit',[App\Http\Controllers\studentController::class,'edit']);
Route::patch('students/{student}',[App\Http\Controllers\studentController::class,'update']);
Route::get('contact/create',[App\Http\Controllers\contactFormController::class,'create']);
Route::post('/contact',[App\Http\Controllers\contactFormController::class,'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

