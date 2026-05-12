<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $table = 'mains';
    
    protected $fillable = [
        'titl',
        'price',
        'description',
        'image'
    ];
}