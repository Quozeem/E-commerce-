<?php


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Registration extends Authenticatable
{
    use HasFactory; //use AuthenticatesUsers;
   protected $guard = "customer";
    protected $table="register";
    public $timestamps=false;
    protected $fillable = [
        'fname',
        'rank',
        'email',
        'password',
        'date',
        'unique_id'
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

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    public function user(){
        return $this->belongTo(User::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

}