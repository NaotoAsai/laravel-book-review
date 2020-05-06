<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $fillable = [
            'user_id',
            'title',
            'body',
            'image',
        ];
}
