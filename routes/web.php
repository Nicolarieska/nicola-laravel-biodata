<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "tittle" => "home", 
        "nama" => "Nicola Arieska Fonda",
        "kelas" => "TI-2A",
        "kuliah" => "Teknik Informatika",
        "matkul" => "Pemrograman Web Lanjut"
    ]);
});

Route::get('/biodata', function () {
    return view('biodata', [
        "tittle" => "biodata", 
        "nama" => "NICOLA ARIESKA FONDA",
        "ttl" => "MALANG, 15 APRIL 2002",
        "jk" => "LAKI - LAKI",
        "goldar" => "O", 
        "alamat" => "PURI CEMPAKA PUTIH 1, KOTA MALANG, JAWA TIMUR 65132",
        "pekerjaan" => "MAHASISWA" ,
        "tk" => "TK AL-HIKMAH (2006 - 2008)",
        "sd" => "SDN ARJOWINANGUN 2 (2008 - 2014)",
        "smp" => "SMPN 5 MALANG (2014 - 2017)" , 
        "sma" => "SMAN 10 MALANG (2017 - 2020)",
        "kuliah" => "POLITEKNIK NEGERI MALANG (2020 - SEKARANG)"
    ]);
});

Route::get('/komentar', function () {
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
});
