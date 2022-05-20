<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'category', 'detail','title','post_img',
    ];
}
