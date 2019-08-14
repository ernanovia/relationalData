<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    //
    protected $table = "telepon";

    public function pengguna()
    {
        //the telepon model connected with pengguna model
        return $this->belongsTo('App\Pengguna');
    }
}
