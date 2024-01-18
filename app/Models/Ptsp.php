<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptsp extends Model
{
    use HasFactory;
    
    // disallow field id to be filled manually
    protected $guarded = ['id'];

    public $timestamps = false;
}
