<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //relation  many to many relation to Hadiah table
    protected $table  ="anggota";

    public function hadiah()
    {
        return $this->belongsToMany('App\Hadiah');
    }
    
}
