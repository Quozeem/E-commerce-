<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers_details extends Model
{
    use HasFactory;
    protected $table="customers_details";
    public $timestamps=false;
    protected $fillable = [
        'name','shipping','email','address','phone','size','orderNumber','orderimage','orderId','qty',
        'brand','price','date','subtotal','payment',
    ];
}
