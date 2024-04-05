<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    
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
   
i have these output data that i want to extract according {
  "status": "success",
  "message": "Successful",
  "data": [
    {
      "id": "vulqxv6u",
      "reference": null,
      "currency": "usdt",
      "address": "0x9503C82179Ec3EA60C55A42c59f3b0aE9c647e4C",
      "network": "bep20",
      "user": {
        "id": "52qbndwm",
        "sn": "QDX3JEQ6N5Q",
        "email": "adee@gmail.com",
        "reference": null,
        "first_name": "test",
        "last_name": "user",
        "display_name": null,
        "created_at": "2024-04-05T05:57:01.000+01:00",
        "updated_at": "2024-04-05T05:57:02.000+01:00"
      },
      "destination_tag": null,
      "total_payments": null,
      "created_at": "2024-04-05T05:58:31.000+01:00",
      "updated_at": "2024-04-05T05:58:35.000+01:00"
    },
    {
      "id": "egiq4mh6",
      "reference": null,
      "currency": "usdt",
      "address": "0x9503C82179Ec3EA60C55A42c59f3b0aE9c647e4C",
      "network": "erc20",
      "user": {
        "id": "52qbndwm",
        "sn": "QDX3JEQ6N5Q",
        "email": "adee@gmail.com",
        "reference": null,
        "first_name": "test",
        "last_name": "user",
        "display_name": null,
        "created_at": "2024-04-05T05:57:01.000+01:00",
        "updated_at": "2024-04-05T05:57:02.000+01:00"
      },
      "destination_tag": null,
      "total_payments": null,
      "created_at": "2024-04-05T06:00:20.000+01:00",
      "updated_at": "2024-04-05T06:00:21.000+01:00"
    },
    {
      "id": "jcmvclca",
      "reference": null,
      "currency": "usdt",
      "address": "TUsJE6ESLHmwaiopZy9XQUaKK1jCGZQTRx",
      "network": "trc20",
      "user": {
        "id": "52qbndwm",
        "sn": "QDX3JEQ6N5Q",
        "email": "adee@gmail.com",
        "reference": null,
        "first_name": "test",
        "last_name": "user",
        "display_name": null,
        "created_at": "2024-04-05T05:57:01.000+01:00",
        "updated_at": "2024-04-05T05:57:02.000+01:00"
      },
      "destination_tag": null,
      "total_payments": null,
      "created_at": "2024-04-05T06:02:21.000+01:00",
      "updated_at": "2024-04-05T06:02:22.000+01:00"
    }
  ]
}   
          modify the code below to work as written 
public function fetch_wallet_address_format($currency,$user_data)
{
   $curl = curl_init();
    //  $user_data=$this->user_data();
curl_setopt_array($curl, [
  CURLOPT_URL =>config('services.quidax.quidax_api_endpoint').'/'.$user_data->quidax_user_id."/wallets/".$currency."/addresses",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer ".config('services.quidax.quidax_secret_key'),
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
      return json_decode($response); 
}
}
   public function update_wallet_address($currency)
   {
       $currency=strtolower($currency);
        if((($currency == 'ngn')))
    {
        return '200';
    }
   $user_data=$this->user_data();
$response=$this->fetch_wallet_address_format($currency,$user_data);

  $network=$response->data[0]->network;
   $currency= $response->data[0]->currency;
    if((($currency == 'btc')))
    {
      $network= strtoupper($response->data[0]->network);
        $address=$response->data[0]->address;
         $min_deposit='0.0002000';
        $user_data->fill(['btc_address'=>$response->data[0]->address]);
          $user_data->update();
    }

  else if(($currency == 'eth'))
    {
          $network= strtoupper($response->data[0]->network);
         $address=$response->data[0]->address;
         $min_deposit='0.010000';
    $user_data->fill(['eth_address'=>$response->data[0]->address]);
          $user_data->update();
    
    }
  else if(($currency == 'usdt'))    {
      
         $network= strtoupper($response->data[1]->network);
            $network_trc= strtoupper($response->data[2]->network);
       $address=$response->data[1]->address;
        $address_trc=$response->data[2]->address;
  $min_deposit='5.0000';
          $user_data->fill(['usdt_address'=>$response->data[1]->address,'usdt_address_trc'=>$response->data[2]->address]);
          $user_data->update();
    }
 return response([
     'min_deposit'=>$min_deposit,
     'currency'=>strtoupper($currency),
     'address'=>$address,
     'address_trc'=>$address_trc ?? null,
     'network'=>$network,
     'networ_trc'=>$network_trc,
     ]);
   }
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
