<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
     <select required name="sell_network" onChange={WithdrawalHandler} className="form-control" id="ngn" >
                <option value=''>&rarr; Sell </option>
                <option value="BTC">&rarr; BTC </option>
                    <option value="ETH">&rarr; ETH </option>
                    <option value="USDT">&rarr; USDT </option>
              </select>
       use HasApiTokens, HasFactory, Notifiable;
 const [currencyRate,setcurrencyRate]=useState()
  const [loadcurrentRate,setloadcurrentRate]=useState(true)
  useEffect(()=>{
    async function CURRENCY_RATE(){
      if(loadcurrentRate){
  axios
  .get(`https://coinremitter.com/api/v3/get-coin-rate`)
      .then((res)=>{
        if(res.data.msg == 'success'){
            setcurrencyRate(res.data.data.`${Withdrawdata.sell_network}`.price)
            setloadcurrentRate(false)
        }
        })
      }
      }
      CURRENCY_RATE
    },[])
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
