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
            "tittle" => "komentar", 
            "perumahan" => "Puri Cempaka Putih 1",
            "kelurahan" => "Arjowinangun",
            "kecamatan" => "Kedungkandang",
            "kota" => "Kota Malang" , 
            "kodepos" => "65132",
            "provinsi" => "Jawa Timur",
            "negara" => "Indonesia"
        ]);
    }
}
