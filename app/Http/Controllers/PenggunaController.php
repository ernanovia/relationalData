<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//called the pengguna model
use App\Pengguna;

class PenggunaController extends Controller
{
    //Relation one to one
    public function index()
    {
        //take all the data
        $pengguna = Pengguna::all();
        //return data to view
        return view('pengguna', ['pengguna' => $pengguna]);
    }

}
