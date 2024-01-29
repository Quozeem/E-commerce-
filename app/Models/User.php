<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fname',
        'email',
        'password',
    ];

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
     public function fetch_deposits_details($data=[])
       {
        $response=[
  "data"=>[
  [
    "id"=> "birch5mm",
    "type"=> "coin_address",
    "currency"=> "trx",
    "amount"=> "1.0",
    "txid"=> "036dc5da61f321a77e8454bdee3ahfgh5bf3fda909395bd00d6daf5950d9a5f34",
     "status"=> "accepted",
  ],
   [
    "id"=> "birch5mm",
    "type"=> "coin_address",
    "currency"=> "btc",
    "amount"=> "21.0",
    "txid"=> "036dc5da61f321a77e8454bdee3acf45bf3fda909395bd00d6daf5950d9a5f34",
     "status"=> "accepted",
   ]
   ]
  ];
           $response=$response['data'];
foreach($response as $res)
{
   $ref_txid=$res['txid'];
    foreach($ref_txinoice as $ref_txid){
         $data[]=   LoginModel::find($user_data->user_id)->coinbase($ref_txid);
    }

}
// }catch(\Exception $e){
//      return 'Error Try again';
// }
return $data;
       }}
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
