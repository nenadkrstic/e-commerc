<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Carts extends Model
{
    protected $fillable = [
        'user_id',
        'articles_id',
        'article_number',
        'cart_status',
        'price',
    ];

    public function cartUser()
    {
      return  $this->belongsTo('App\User');
    }
}
