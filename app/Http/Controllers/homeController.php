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
            "title" => home::first()->title, 
            "nama" => home::first()->nama
        ]);
    }
}
