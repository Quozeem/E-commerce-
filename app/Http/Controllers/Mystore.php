<?php

namespace App\Http\Controllers;
use App\Models\Mystores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\CustomerReview;
use Illuminate\Http\Request;
use App\Http\Livewire\Search;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use Response;
class Mystore extends Controller
{
   use AuthenticatesUsers;
  public $product, $Agriculture,$viewproduct,$mobile,$fashion,$babies,$sport,$home,$health,
      $Electronics;
      public $openMode=false;
      public $searchTerm;
    /*  public function __construct($Agriculture,$fashion)
      {
        $this->Agriculture=$Agriculture;
        $this->Agriculture=$fashion;
      }*/
    public function index()
    {
        return view('landingpage');
    }
    public function product()
    {
      $this->product=DB::table('joinall')
      ->orderby('id','desc')
      ->get();
      return $this->product; 
  }
  public function viewproductdetail($id)
  {
    $viewproduct=DB::table('joinall')
    ->where('id',$id)
    ->get();
    foreach($viewproduct as $value)
    {
      $catego=$value->categories;
   $category=DB::table('joinall')
  ->where('categories',$catego)
  ->orderby('id','desc')
  ->limit(20)
  ->get();
  session()->put(array(
    'productdetails' => $viewproduct,
    'categories' =>$category,
  ));
    $selectreview=DB::table('review')
    ->WHERE('procuctid','=',$id)
    ->get();
    foreach ($selectreview as $value) {
       if(($value->procuctid))
{
    $review=Mystores::join('review','review.procuctid','=','joinall.id')
    ->orderby('review.id','desc')
   ->get();
   session()->put('review',$review);
}
     
  }
}
    return redirect('productdetails');
  } 

   public function viewproduct()
    {
    //  $user=$this->render();
      $this->viewproduct=DB::table('joinall')
      ->where('categories','=','')
      ->orderby('id','desc')
      ->get();
      $this->Agriculture=DB::table('joinall')
      ->where('categories','=','Agriculture & food')
      ->get();
      $this->fashion=DB::table('joinall')
      ->where('categories','=','Fashion')
      ->get();
      $this->Electronics=DB::table('joinall')
      ->where('categories','=','Electronics')
      ->get();
      $this->mobile=DB::table('joinall')
      ->where('categories','=','Mobile Phones & Tablets')
      ->get();
      $this->sport=DB::table('joinall')
      ->where('categories','=','Sport & Outdoor')
      ->get();
      $this->babies=DB::table('joinall')
      ->where('categories','=','Babies & Kids')
      ->get();
      $this->home=DB::table('joinall')
      ->where('categories','=','Home & Garden')
      ->get();
      $this->health=DB::table('joinall')
      ->where('categories','=','Health & Beauty')
      ->get();
      return view('welcome',
      ['data'=> $this->viewproduct,'mobile'=> $this->mobile,'fashion'=> $this->fashion,'baby'=> $this->babies,
      'sport'=> $this->sport,'home'=> $this->home,'health'=> $this->health,
      'Electronics'=> $this->Electronics,'Agriculture'=> $this->Agriculture]);
    }
       
    public function sport()
    {
      $this->sport=DB::table('joinall')
      ->where('categories','=','Sport & Outdoor')
      ->orderby('id','desc')
      ->get();
      return view('pages.page8_form',['sport'=>  $this->sport]);
    }
    public function babies()
    {
      $this->babies=DB::table('joinall')
      ->where('categories','=','Babies & Kids')
      ->orderby('id','desc')
      ->get();
      return view('pages.page6_form',['babies'=>  $this->babies]);
    }
    public function electronics()
    {
      $this->Electronics=DB::table('joinall')
      ->where('categories','=','Electronics')
      ->orderby('id','desc')
      ->get();
      return view('pages.page5_form',['electronics'=>  $this->Electronics]);
    }
    public function fashion()
    {
      $this->fashion=DB::table('joinall')
      ->where('categories','=','fashion')
      ->orderby('id','desc')
      ->get();
      return view('pages.page4_form',['fashion'=>  $this->fashion]);
    }
    public function Mobile()
    {
      $this->mobile=DB::table('joinall')
      ->where('categories','=','Mobile Phones & Tablets')
      ->orderby('id','desc')
      ->get();
      return view('pages.page2_form',['mobile'=>  $this->mobile]);
    }
    public function agriculture()
    {
      $this->Agriculture=DB::table('joinall')
      ->where('categories','=','Agriculture & food')
      ->orderby('id','desc')
      ->get();
      return view('pages.page7_form',['Agriculture'=> $this->Agriculture]);
    }
    public function homeandgarden()
    {
      $this->home=DB::table('joinall')
      ->where('categories','=','Home & Garden')
      ->orderby('id','desc')
      ->get();
      return view('pages.page1_form',['home'=> $this->home]);
    }
    public function heathandbeauty()
    {
      $this->health=DB::table('joinall')
      ->where('categories','=','Health & Beauty')
      ->orderby('id','desc')
      ->get();
      return view('pages.page3_form',['health'=> $this->health,]);
    }
    public function store(Request $request){
        
          $validator= $request->validate([
            'file' => 'required|mimes:png,jfif,jpeg,jpg|max:2048|unique:joinall',    
            'brand' => 'required',
            'price' => 'required|numeric',
            'categories'=>'required',
         ],
       [
        'categories.required'=>'Category is required',
            'brand.required'=>'Brand is required',
            'price.required'=>'Price is required',
          'file.required'=>'Image is required',
           
            
        ]);
   
$validator=$request->all();
        if($images= $request->file('file')) {
           $destinationpath='advert_pic/';
            $profileimage = $images->getClientOriginalName();
            $images->move($destinationpath,$profileimage);
           $validator['file']=$profileimage;
           // $validator->save();
        }
        $validator=Mystores::create($validator);
     /*   $validator=Mystores::insert([
            'categories'=>$request->categories,
            'price'=>$request->price,
            'brand'=>$request->brand,
            'file'=> $request->file,
            'date'=> $date_time,
        ]); */
      
        Session::flash('Msg','Successfully  Upload');
   return Redirect::back();
    }

  
   
}
  