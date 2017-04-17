<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $fillable = [
        'article_id',
        'number',
    ];
}
