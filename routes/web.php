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
Auth::routes();

//Customer LOgin / Create Account Route
Route::group(['namespace'=>'Auth'],function(){
Route::get('customerlogin','LoginController@viewlogin')->name('viewlogin');
Route::post('customerlogin','LoginController@customerlogin')->name('logincustomer');
Route::post('customers','LoginController@CustomerRegistration');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function () {
   
    return view('home');
   
  })->middleware('auth')->name('home');
