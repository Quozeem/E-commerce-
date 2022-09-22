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
//Route::get('searchKyboard','Livewire\Search@render');
Route::get('emailtext',function(){
    return view('email/cartItem');
});

Route::get('error', function(){
    return view('errors/404');
});
//Search Integration
Route::get('searchSort/{sort}','SearchController@searchSort');
Route::get('searchKyboard/{inputVal}','SearchController@searchKyboard');
//Chat ServiceProvider

//Payment Gateway integration
Route::get('/payment/callback',[App\Http\Controllers\PaymentController::class,'handleGatewayCallback']);
Route::get('paymentGateway/{reference}',[App\Http\Controllers\PaymentController::class,'paymentGateway']);
Route::post('pay',[App\Http\Controllers\PaymentController::class,'redirectToGateway'])->name('pay');
//CustomerReview Route
Route::group(['middleware'=>'productview'],function(){
  Route::get('reviewlogin','ReviewController@reviewlogin');
    Route::post('reviewlogin','ReviewController@customerreviwlogin')->name('loginreview');
    Route::get('customerreview','FunctionController@index')->middleware('reviewmiddle');
    Route::post('customerreview','FunctionController@writerview')->name('writerview');
});
//Customere LOgin / Create Account Route
})->middleware('productview');*/
Route::get('/home',function () {
   
    return view('home');
   
  })->middleware('auth')->name('home');
