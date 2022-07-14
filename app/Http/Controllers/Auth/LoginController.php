<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RoutphpeServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer');
    }
   public function viewlogin()
   {
       return view('buyer');
   }
   public function customerlogin(Request $request)
   {
    $log_detail=array(
        'email' =>$request->get('email'),
        'password' =>$request->get('password'),
      );
      if(Auth::guard('customer')->attempt( $log_detail,$request->filled('remember'))) {
    
      return  redirect('customeraddress');
      }
      else{
        Session::flash('errorMessage','INVALID LOGIN DETAILS');
        return redirect()->back();
      }
   }
   
  public function CustomerRegistration(Request $request)
  {
    $select=Registration::where('email','=',$request->email)->get();
    if(count($select) >0)
    {
      Session::flash('errorMessage','Email address already exist');
      return redirect()->back();
    }
    else
    { 
      $register=$request->all();
      $register['password'] = Hash::make($register['password']);
      $register=Registration::create($register);
   //auto login
    // Retrive Input
$user_data =array(
  'email'=>$request->get('email'),
  'password'=>$request->get('password'),
 
);
if (Auth::guard('customer')->attempt( $user_data ,$request->filled('remember'))) {
    // if  success login
  //mail function
    Mail::send('email.newcustomer',['fname'=>$request->fname],function($message) use($request){
    $message->to($request->email);
    $message->subject('Account Created Successfully');
});
    return  redirect('customeraddress');
}
    } 
  }
}
