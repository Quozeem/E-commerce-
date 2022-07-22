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
Route::group(['middleware'=>'customer'],function(){
    Route::get('meetsupport/{unique_id}','FunctionController@getSupportservice');
    Route::get('serviceProvider','FunctionController@serviceProvider')->name('chat');
    Route::post('getChat','FunctionController@getChat')->name('getChat');
    Route::post('inser-chat','FunctionController@insertChat')->name('insertChat');
});

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
//Customer LOgin / Create Account Route
Route::group(['namespace'=>'Auth'],function(){
Route::get('customerlogin','LoginController@viewlogin')->name('viewlogin');
Route::post('customerlogin','LoginController@customerlogin')->name('logincustomer');
Route::get('logoutss','UserloginController@loggedout')->name('loggedout');
Route::post('customers','LoginController@CustomerRegistration');
});
// Billing / order summary Address Route
Route::get('customeraddress',[App\Http\Controllers\OrderitemController::class,'viweaddress']);
Route::post('orderitem',[App\Http\Controllers\OrderitemController::class,'index'])->name('orderitem');
Route::get('orderdetails',[App\Http\Controllers\OrderitemController::class,'orderdetails'])->middleware('Cartredirect');
Route::get('searchYourCity/{states_name}',[App\Http\Controllers\ShippingController::class,'shipping_rate']);
Route::get('shipping',[App\Http\Controllers\ShippingController::class,'index']);
//Add Product to cart Delect /Update / clear or Remove Route
Route::post('delectsession', 'AddtocartController@clearallcart');
Route::get('remove-cart/{id}', 'AddtocartController@removed');
Route::patch('update-cart', 'AddtocartController@updatecart');
Route::get('cart', 'AddtocartController@cart');
Route::get('addtocart/{id}', 'AddtocartController@addTocart');
// Show Pages Route

Route::post('text','FunctionController@texting');
Route::get('about','FunctionController@about');
Route::get('/','Mystore@index');
Route::get('productdetails/{id}','Mystore@viewproductdetail')->name('viewproductdetail');
//Route::get('landing','Mystore@index');
Route::get('page8_form','Mystore@sport');
Route::get('page6_form','Mystore@babies');
Route::get('page5_form','Mystore@electronics');
Route::get('page4_form','Mystore@fashion');
Route::get('page2_form','Mystore@Mobile');
Route::get('page1_form','Mystore@homeandgarden');
Route::get('page3_form','Mystore@heathandbeauty');
Route::get('page7_form','Mystore@agriculture');
Route::get('/','Mystore@viewproduct');
Route::post('/','Mystore@store');
Route::get('productdetails','Mystore@Profiles')->middleware('productview');
Route::post('productdetails','Mystore@getCartIdToCart')->name('cartProductdetails')->middleware('productview');
Route::get('contact', function () {
    return view('contact');
});
Route::get('text', function () {
    return view('text');
});

/*Route::get('mailtext', function () {
    return view('mail/newcustomer');
});
Route::get('productdetails', function () {
    return view('profiles');
})->middleware('productview');*/
Route::get('/home',function () {
   
    return view('home');
   
  })->middleware('auth')->name('home');
