<?php

namespace App;
use App\Numbers;
use App\Images;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name',
        'description',
        'brend',
        'lager',
        'type',
        'price',
        'article_code',

    ];

    public function articleNumber()
    {
       return $this->hasMany('App\Numbers');
    }

    public function articleImage()
    {
        return $this->hasMany('App\Images');
    }


}




