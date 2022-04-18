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
            "title" => nicola::find(1)->title, 
            "nama" => nicola::find(1)->namalengkap,
            "ttl" => nicola::find(1)->ttl,
            "jk" => nicola::find(1)->jk,
            "goldar" => nicola::find(1)->goldar, 
            "alamat" => nicola::find(1)->alamat,
            "pekerjaan" => nicola::find(1)->pekerjaan,
            "tk" => nicola::find(1)->tk,
            "sd" => nicola::find(1)->sd,
            "smp" => nicola::find(1)->smp, 
            "sma" => nicola::find(1)->sma,
            "kuliah" => nicola::find(1)->kuliah
        ]);
    }
}
