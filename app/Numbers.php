<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    protected $fillable = [
        'article_id',
        'size',
    ];
    public $timestamps = false;
}
