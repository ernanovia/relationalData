<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    //relation  many to many relation 
    //connected hadiah table and anggota table
    protected $table = "hadiah";

    public function anggota()
    {
        return $this->belongsToMany('App\Anggota');
    }
}
