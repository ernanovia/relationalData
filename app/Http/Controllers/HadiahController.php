<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import anggota and hadiah model
use App\Anggota;
use App\Hadiah;

class HadiahController extends Controller
{
    //
    public function index()
    {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}
