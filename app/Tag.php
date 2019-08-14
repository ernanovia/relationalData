<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //declaration tags  table connected with atricle table
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
