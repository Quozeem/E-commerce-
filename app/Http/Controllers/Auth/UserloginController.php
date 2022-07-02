<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Mystores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Registration;
use App\Http\Controllers\ShippingController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Response;
class UserloginController extends Controller
{ 
  
  public function loggedout()
  {
      Auth::guard('customer')->logout();
      return redirect('customerlogin');
  }
   
}
  