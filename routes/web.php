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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home',['title'=>'test']);
});
Route::get('/bootmodal', function () {
    return view('bootmodal',['title'=>'this is cool website']);
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/bootmodal', 'HomeController@bootModal')->name('bootmodal');