<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mystores extends Model
{
    use HasFactory;
    protected $table="joinall";
    public $timestamps=false;
    protected $fillable = [
        'price',
        'file',
        'address',
        'date',
        'brand',
        'categories'
    ];
}
