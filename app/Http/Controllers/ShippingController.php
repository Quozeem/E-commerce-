<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Shipping;
use DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use Response;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
public static function index()
{
    $shipping=DB::table('shipping_rate')
    ->get();
    return $shipping;
}

public function shipping_rate($states_name){
    $name_city  = Shipping::where('states_name',$states_name)
                       ->get();
  return response()->json(
    $name_city 
  );  
  /*foreach( $name_city  as $row)
  {
    $rate="<option value=$row->rates># $row->rates</option>";
    return $rate;
  }*/
 
 }   
}
