<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = [ 
        'title',
        'title_imgurl',
        'main_title',
        'main_imgurl',
        'dep_date',
        'link',
        'category',
    ];
}
