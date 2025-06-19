<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasallik extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cover',
        'type',
        'havf'
    ];
}
