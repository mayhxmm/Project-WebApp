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


//Redirect to Welcome page 
Route::get('/', function () {
    return view('welcome'); });

//CRUD controller
Route::resource('students', 'App\Http\Controllers\StudentsController');

//Authentication controller
Auth::routes();

//Extract Record Count and Latest Record from Students Model
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
