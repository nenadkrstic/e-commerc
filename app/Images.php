<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'article_id',
        'image',
    ];

    public $timestamps = false;
}
