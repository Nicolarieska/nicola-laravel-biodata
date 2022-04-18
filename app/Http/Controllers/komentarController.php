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
            "title" => 'komentar', 
            "perumahan" => komentar::first()->title,
            "kelurahan" => komentar::first()->kelurahan,
            "kecamatan" => komentar::first()->kecamatan,
            "kota" => komentar::first()->kota, 
            "kodepos" => komentar::first()->kodepos,
            "provinsi" => komentar::first()->provinsi,
            "negara" => komentar::first()->negara
        ]);
    }
}
