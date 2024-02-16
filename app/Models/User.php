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
        $Quidax=new Quidax();
        $Quidax=  $Quidax->where('user_id',$userId)->get();
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
       i got this error  Malformed UTF-8 characters, possibly incorrectly encoded in file modify the code below to work correctlly
        public function wallet_qrcode($currency){
$address_img= $this->wallet_qrcode($response);
 return ([
     'address'=>$response->data->address,
     'img_qrcode'=>$address_img->image,
     'currency'=>$currency,
     'network'=>$network
     ]);
   }
        public function wallet_qrcode($response)
   {
       $address =$response->data->address;
       $size=200;
       $endpoint=config('services.QRCODE.qrcode_endpoint').'?data='.urlencode($address)."&size={$size}x{$size}";
       $response=Http::get($endpoint);
       return response(['image'=>$response->body(),'Content-Type'=>'image/png']);
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
