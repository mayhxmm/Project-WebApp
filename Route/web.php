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


//Welcome page for first time 
Route::get('/', function () {
    return view('welcome'); });

//CRUD controller
Route::resource('students', 'App\Http\Controllers\StudentsController');

//Authentication controller
Auth::routes();

//Redirect to Home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

