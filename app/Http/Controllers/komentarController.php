<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komentar;

class komentarController extends Controller
{
    //
    public function komentar()
    {
        return view('komentar', [
            "tittle" => komentar::find(1)-> tittle, 
            "perumahan" => komentar::find(1)-> alamat,
            "kelurahan" => komentar::find(1)-> kelurahan,
            "kecamatan" => komentar::find(1)-> kecamatan,
            "kota" => komentar::find(1)-> kota, 
            "kodepos" => komentar::find(1)-> kodepos,
            "provinsi" => komentar::find(1)-> provinsi,
            "negara" => komentar::find(1)-> negara
        ]);
    }
}
