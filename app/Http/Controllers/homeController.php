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
            "tittle" => "home", 
            "nama" => home::getNama(),
            "kelas" => home::getKelas(),
            "kuliah" => home::getKuliah(1),
            "matkul" => home::getKuliah(2)
        ]);
    }
}
