<?php

namespace App\Http\Controllers;

use App\Models\Mystores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CustomerReview;
use App\Models\Registration;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use Response;
class FunctionController extends Controller
{
 
  public function index()
  {
      return view('review');
  }
  public function writerview(Request $request)
  {
       $insert=$request->all();
       CustomerReview::create($insert);
       //session()->put('review', $insert);
      return redirect('productdetails');
  }
  public function about()
  {
    return view('about');
  }
 public function texting(Request $request)
 {
      $insert=$request->all();
      Registration::create($insert);
    return "successfully registered";

 }
}
  