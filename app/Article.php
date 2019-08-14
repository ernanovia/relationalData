<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function tags()
    {
        //relation  many relation to tag relation
        return $this->hasMany('App\Tag');
    }
}
