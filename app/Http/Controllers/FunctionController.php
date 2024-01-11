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
 public static function allProducts()
{
    $self=new Self();
     $result = [];
     Self::orderBy('created_at', 'desc')
     ->chunk(200,function ($items) use (&$result,&$self){
     Self::products_details($items,$result);

    });
    return $result;
}
 public static function products_details($items,array $result)
{
    
     foreach($items as $products){
            $price = number_format($products->product_price, 2, '.', ',');
 /********** Time updated differences *********/

 $upload_time= Carbon::parse($products->created_at);
 $time_differences= self::Time_difference($upload_time);
      
 $destinationPath = 'product_img/';
        $str = $products->product_image;
           $data = explode(", ", $str);
             $first_array = $data[0];
        $pieces = explode(",", $first_array);
        $first_product_filename = $pieces[0];
$result[]= array(
       'id' => $products->id,
            'product_category'=>$products->product_category,
            'product_name' => $products->product_name,
            'vendor_id' => $products->vendor_id,
            'product_image' => asset( $destinationPath.$first_product_filename),
            'product_country' => $products->product_country . ',' . $products->product_state,
            'product_state' =>  $products->product_state,
            'product_price' =>  $price,
            'time' => $time_differences ,
            'description'=> $products->product_description,
    'tag'=> $products->product_tag,
    );
        }
       
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
  
