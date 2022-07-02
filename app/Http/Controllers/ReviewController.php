<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class ReviewController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function __construct()
    {
$this->middleware('review:customer')->except('logout');
    }
    
   public function reviewlogin()
   {
       return view('reviewlogin');
   }
  
    public function customerreviwlogin(Request $request)
    {
     $log_detail=array(
         'email' =>$request->get('email'),
         'password' =>$request->get('password'),
       );
       if(Auth::guard('customer')->attempt( $log_detail,$request->filled('remember'))) {
       return  redirect('customerreview');
       }
       else{
         Session::flash('errorMessage','INVALID LOGIN DETAILS');
         return redirect()->back();
       }
    }
    
}
