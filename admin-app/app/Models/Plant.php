<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name',
        'muddat',
        'suv',
        'description',
        'image',
        'category'
    ];
}
