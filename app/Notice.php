<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable=[
        'id',
        'subject',
        'content',
        'category',
        'cnt',
    ];
    protected $hidden=[
        'remember_token',
    ];
}
