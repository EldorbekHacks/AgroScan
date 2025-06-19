<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'user_message',
        'bot_message',
        'photo'
    ];
}
