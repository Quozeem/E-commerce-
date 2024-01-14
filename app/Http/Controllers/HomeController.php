<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function buying():HasMany
  {
      return $this->hasMany(Buying::class,'user_id')->where('usdt','!=',null)
        ->latestOfMany();
  }
    public function buying(): array
{
    $result = [];

    $this->hasMany(Buying::class, 'user_id')
        ->where('usdt', '!=', null)
        ->orderBy('created_at', 'desc')
        ->chunk(200, function ($items) use (&$result) {
            foreach ($items as $item) {
                $date = date("F j, Y h:ia", strtotime($item->created_at));
                $result[] = [
                    'time' => $date,
                    'realMoney' => -(number_format($item->amountdeposit, 2, '.', ',')),
                    'subject' => 'Item Order',
                    'activities' => 'Item Order',
                    'message' => 'You have a new Order',
                    'type' => 'USDT',
                ];
            }
        });

    return $result;
}

    public function buying():HasMany
    {
 $result=[];
       $this->hasMany(Buying::class,'user_id')->where('usdt','!=',null)
        ->orderBy('created_at', 'desc')->chunk(200,function ($items) use (&$result){
            foreach($items as $item)
            {
                 $date = date("F j, Y h:ia", strtotime($item->created_at));
               $result=  array(
 'time' =>  $date ,
 'realMoney'=>-(number_format($item->amountdeposit, 2, '.', ',')),
  'subject'=>'Item Order',
   'activities'=>'Item Order',
 'message'=> 'You have a new Order',
 'type'=>'USDT',
   );
            }
    });
    return $result;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
