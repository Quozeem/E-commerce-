<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

public function deposit_detail_webhook($currency)
{
    try {
        $response = $this->client->request('GET', config('services.quidax.quidax_api_endpoint') . '/deposits/all?currency=' . $currency . '&state=checked', [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.quidax.quidax_secret_key'),
                'accept' => 'application/json',
            ],
        ]);

        $response = json_decode($response->getBody());
        $response = $response->data;
    } catch (\Exception $e) {
        return ['status' => 419];
    }

    if (!$response) {
        return ['status' => 404];
    }

    foreach ($response as $res) {
        $quidax_currency = strtoupper($res->currency);
        $crypto_amount = $res->amount;
        $CryptoModel = new CryptoModel();
        $amountdeposit =  $CryptoModel->usd_conversion($quidax_currency, $crypto_amount);

        $quidax_user_id = $res->user->id;
        $quidax_id = $this->where('quidax_user_id', $quidax_user_id)->get();

        foreach ($quidax_id as $val) {
            $user_ID = $val->user_id;
            $existing_deposit = Coinbase::where('user_id', $user_ID)->where('invoice', $res->id)->first();

            if (!$existing_deposit && $res->status == 'checked') {
                Coinbase::create([
                    'ref' => $res->id,
                    'invoice' => $res->id,
                    'user_id' => $user_ID,
                    'activities' => 'Received',
                    'status' => 'Success',
                    'amountdeposit' => $amountdeposit,
                    'type' => $quidax_currency,
                    'currency' => 'usd',
                    $res->currency => $crypto_amount, //crypto amount
                ]);
            }
        }
    }

    return ['status' => 200];
}


  public function deposit_detail_webhook($currency)
         {
             
           /************* if user deposit data alredy exit in database ***********/
 try{
$response =  $this->client->request('GET',  config('services.quidax.quidax_api_endpoint').'/deposits/all?currency='.$currency.'&state=checked', [
  'headers' => [
    'Authorization' => 'Bearer '.config('services.quidax.quidax_secret_key'),
    'accept' => 'application/json',
  ],
]);

$response= json_decode($response->getBody());
$response= $response->data;
}catch(\Exception $e){
     return ['status'=>419];
}
$data_deposits=[];
 

            
if($response)
{
    foreach($response as $key=> $res)
{    
    $quidax_currency=strtoupper($res->currency);
     $crypto_amount=$res->amount;
             $CryptoModel= new CryptoModel();
        $amountdeposit =  $CryptoModel->usd_conversion($quidax_currency,$crypto_amount);
             $usd_rate= Usd_rates::first()->rates;
          
      $quidax_user_id = $res->user->id;
      $quidax_id= $this->where('quidax_user_id',$quidax_user_id)->get();
       foreach($quidax_id as $key=>  $val)
 { 
     $user_ID=$val->user_id;
     $user_account_data= Coinbase::where('user_id',$user_ID)->get();
      if(($user_account_data->isEmpty()))
 {
 
      if($res->status == 'checked'){
//   //insert new deposits transaction that's succesful
    $data=[
                 'ref'=>$res->id,
                  'invoice'=>$res->id,
                 'user_id'=>$user_ID,
                 'activities'=>'Received',
                 'status'=> $res->status == 'checked' ? 'Success' : 'Pending',
                 'amountdeposit'=>$amountdeposit,
                 'type'=>$quidax_currency,
                 'currency'=>'usd',
                 $res->currency=>$crypto_amount,//crypto amount
                //  'created_at'=> $res->created_at,
                 ];
   
 }
}
    else
     {
        
     foreach($user_account_data as $user_account)
     {
      $user_inv = $user_account->invoice;
      $ref_txid=$res->id;
  $foundMatch=false;
  
  if(($user_inv != $ref_txid) && ( $res->status == 'checked'))
  {
    
      //insert new deposits transaction that's succesful
      $data=[
                 'ref'=>$res->id,
                  'invoice'=>$res->id,
                 'user_id'=>$user_ID,
                 'activities'=>'Received',
                 'status'=> $res->status == 'checked' ? 'Success' : 'Pending',
                 'amountdeposit'=>$amountdeposit,
                 'type'=>$quidax_currency,
                 'currency'=>'usd',
                 $res->currency=>$crypto_amount,//crypto amount
                //  'created_at'=> $res->created_at,
                 ];
       $foundMatch=true;
    break;
    // return 3;
  }
  }
 }
 $data_deposits[]=$data;
 

}

}
}
else{
     return ['status'=>404];
}           
Coinbase::insert($data_deposits);
       }

class User extends Authenticatable
{
       use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
      
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
   

    protected $hidden = [
        'password',
        'remember_token',
    ];
  public function coinbase():HasMany
    {
     
        return $this->hasMany(Coinbase::class,'user_id') ->where('status','!=','Success');
    }
     
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
