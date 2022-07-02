<?php

namespace App\Http\Controllers;
use App\Models\Customers_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Payment;
use App\Models\Registration;
use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Session;
use Redirect;
use Paystack;
use Illuminate\Support\Str;
use validator;
use Response;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
  public function redirectToGateway(Request $request)
  {
  try{
    return Paystack::getAuthorizationUrl()->redirectNow();
  }
  catch(\Exception $e){
    return Redirect::back()->withMessage(['PayMessage'=>'The paystack token has expired.Please refresh the page and try again.',
    'type'=>'error']);
  }
  }
public function paymentGateway($reference)
{
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/". rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_SSL_VERIFYPEER=>0,
    CURLOPT_SSL_VERIFYHOST=>0,
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer ************************************************",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  //  }
 // return redirect('/');
 // if($response)
  }
  
}
public function handleGatewayCallback()
{
  $paymentDetails = Paystack::getPaymentData();
  $status=$paymentDetails['data']['status'];
  $reference=$paymentDetails['data']['reference'];
  $amount=$paymentDetails['data']['amount'];
  $date=date('M d,Y');
  $paymentDetails=array(
    'status'=>$status,'reference'=>$reference,  'first_name'=>session('name'),'email'=>session('email'),
    'address'=>session('address'), 'amount'=>$amount, 'shipping'=>session('shipping'),
    'date'=>$date,
  );
  if($status == "success")
  {
 $cart= session()->get('cart');
  foreach( $cart as $allcustomerDetails)
  {
    $customerDetails=array(
      'name'=>session('name'),   'email'=>session('email'),   'address'=>session('address'),
      'phone'=>session('phone'),   'orderId'=> $allcustomerDetails['id'],   'date'=>$date,
      'orderNumber'=>session('orderNumber'),   'price'=> $allcustomerDetails['price'],   'qty'=>$allcustomerDetails['quantity'],
      'shipping'=>session('shipping'),   'subtotal'=>$allcustomerDetails['quantity'] * $allcustomerDetails['price'], 
    );
  Customers_details::create($customerDetails);
  }
  Payment::create($paymentDetails);
  session()->forget('cart');
  return redirect()->back();
}
 
}
}
