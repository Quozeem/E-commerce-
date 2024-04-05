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
   modify the code below  
     <div className="copy-wallet" onClick={() => props.handleCopy(walletAddress.address,1)}>
                  
                  {props.switchButton && action === 1?  <IoMdCheckmark  style={{color:'green', height:"30px" , width:"30px"}}/> : 
                   <AiOutlineCopy  style={{ height:"30px" , width:"30px"}}/>}
                 
                 
              </div>

      const handleCopy = (addresss) => {
    copy(addresss);
    setcopied(true)
   
  };

<Address
                                    switchButton={copied}
                                    handleCopy={handleCopy}
                               Handlerclose={()=>Handlerclose()}/>
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
