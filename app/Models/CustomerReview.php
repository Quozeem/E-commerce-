<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    protected $table="review";
    public $timestamps=false;
    protected $fillable = [
        'author',
        'email',
        'title',
        'body',
        'procuctid',
    ];

}
