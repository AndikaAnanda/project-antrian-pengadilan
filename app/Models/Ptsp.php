<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptsp extends Model
{
    use HasFactory;
    
    // disallow field id to be filled manually
    protected $guarded = ['id'];

    // cast retrieved date to datetime object
    protected $casts = [
        'tanggal' => 'datetime'
    ];

    // disable default timestamps
    public $timestamps = false;
}
