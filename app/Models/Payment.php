<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table="orderpayment";
    public $timestamps=false;
    protected $fillable = [
        'status','reference','amount','email','first_name','address','shipping','date'
    ];
}
