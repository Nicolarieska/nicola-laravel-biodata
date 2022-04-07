<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class homeController extends Controller
{
    //
    public function home()
    {
        return view('home', [
            "tittle" => home::first()->tittle, 
            "nama" => home::first()->nama,
            "kelas" => home::first()->kelas,
            "kuliah" => home::first()->kuliah,
            "matkul" => home::first()->matkul
        ]);
    }
}
