<?php

namespace App\Http\Controllers;
use App\Models\Customers_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Registration;
use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Str;
use validator;
use Response;
use Illuminate\Http\Request;

class OrderitemController extends Controller
{
  public function __construct()
  {
    //to redirect back to login page if any by pass through url
    //$this->middleware('customer');
    //if cart item is empty
    //$this->middleware('Cartredirect');
  }
  
  public function index(Request $request)
    {
   $ordernumber=rand(0000000,9999999);
    session()->put(array(
      'orderNumber'=>$ordernumber,
        'name'=>$request->name,
  'shipping'=>$request->name_city,
       'email'=>$request->email,
       'country'=>$request->country,
      'state'=>$request->state,
       'phone'=>$request->phone,
      'address'=>$request->address,
      'lga'=>$request->lga,
    )
    );
         return redirect()->back();
    }
  public function viweaddress()
  {
    $shipping=ShippingController::index();
    return view('checkout/billingaddress',['shipping'=> $shipping]);
  
  }
    
public function orderdetails()
{
return view('checkout/orderdetail');
} 
public function customerdetails(Request $request)
{
  if(count($request->orderId) > 0)
    {
  foreach($request->orderId as $key=> $allcustomerDetails)
  {
    $customerDetails=array(
      'name'=>$request->name,   'email'=>$request->email,   'address'=>$request->address,
      'phone'=>$request->phone,   'orderId'=>$request->orderId[$key],   'date'=>$request->date,
      'orderNumber'=>$request->orderNumber,   'price'=>$request->price[$key],   'qty'=>$request->qty[$key],
      'shipping'=>$request->shipping,   'subtotal'=>$request->subtotal[$key], 
    );
  $insert=Customers_details::create($customerDetails);
  }}
  return redirect()->back();
}
}
