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

    public function cartToUser()
    {
      return  $this->belongsTo('App\User', 'user_id');
    }

    public function cartToArticle()
    {
        return $this->belongsTo('App\Article','articles_id');
    }
}
