<?php

namespace App\Http\Controllers;
use App\Models\Mystores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\FunctionController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use Response;
class AddtocartController extends Controller
{
  public function __constuct(product $product)
  {
    $this->product=$product;
  }
  public function cart()
  {
   $shipping= ShippingController::index();
    return view('cart',['shipping'=>$shipping]);
  }
    public function addTocart($id)
    {
  //$id= $request->id;
  $products=Mystores::findorFail($id);
  
    $cart= session()->get('cart',[]);   
    //if cart not empty then check if this product already exit
    if(isset($cart[$id]))
    {
      $cart[$id]['quantity']++;
    }
    else{
      session()->put('size',array(
        'big'=> 'S',
        'medium'=> 'M',
        'large'=> 'L',
        'extra'=> 'XL',
      ));

    //if item not exit in the cart then added to cart with qty 1
  $cart[$id]=[
    'id' => $products->id,
    'brand' => $products->brand,
   // 'option' =>  $size,
         'quantity' => 1,
          'price' =>$products->price,
          'file' =>$products->file,
  ];
}
  session()->put('cart',$cart);
    return redirect()->back()->with('cartsucces','Product added to cart successfully!');
    }
   /* 
  public function CustomerRegistration(Request $request)
  {
    if(isset($request->deleteallcart))
    {
      session()->forget('cart');
    }
    return redirect('/');
  }*/
    public function clearallcart(Request $request)
    {
      if(isset($request->deleteallcart))
      {
        session()->forget('cart');
      }
      return redirect()->back();
    }
    public function removed($id)
    {
         if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('cartremove', 'Product removed successfully');
          
        }
    }
    public function updatecart(Request $request)
    {
   if($request->id && $request->quantity){
      $cart = session()->get('cart');
     $cart[$request->id]["quantity"] = $request->quantity;
      session()->put('cart', $cart);
     //session()->flash('updateCart', 'Cart updated successfully');
      $updateCart= "<p style='width:60%;padding: 1em 2em 1em 3.5em;
      margin: 0 0 2em;
      position: relative;
      background-color: #f7f6f7;
      color: #515151;list-style: none outside;
     
      word-wrap: break-word'>Cart updated successfully</p>";
      $Cartremove= "<p style='width:60%;padding: 1em 2em 1em 3.5em;
      margin: 0 0 2em;
      position: relative;
      background-color: #f7f6f7;
      color: #515151;list-style: none outside;
     
      word-wrap: break-word'>Cart removed successfully</p>";
      return response()->json(['updateMsg'=>$updateCart,
    'RemoveupdateMsg'=>$Cartremove]);
  }
   
}
}
  