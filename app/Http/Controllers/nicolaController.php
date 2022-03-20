<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nicola;

class nicolaController extends Controller
{
    //
    public function biodata()
    {
        return view('biodata', [
            "tittle" => "biodata", 
            "nama" => nicola::getNama(),
            "ttl" => nicola::getTtl(),
            "jk" => nicola::getJk(),
            "goldar" => nicola::getGoldar(), 
            "alamat" => nicola::getAlamat(),
            "pekerjaan" => nicola::getPekerjaan(),
            "tk" => nicola::getSekolah(1),
            "sd" => nicola::getSekolah(2),
            "smp" => nicola::getSekolah(3), 
            "sma" => nicola::getSekolah(4),
            "kuliah" => nicola::getSekolah(5)
        ]);
    }
}
