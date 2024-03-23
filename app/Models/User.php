<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
1hcATzNVAW7CgpvW5o8fa8xyhvsb7BxJarwVshei


This is the secret key

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
