<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    public static $nama = "NICOLA ARIESKA FONDA";

    public static function getNama()
    {
        return self::$nama;
    }

    public static $kelas = "TI-2A";

    public static function getKelas()
    {
        return self::$kelas;
    }

    public static function getKuliah($data)
    {
        if($data===1)
        {
            $kuliah = "Teknik Informatika";
        }else{
            $kuliah = "Pemrograman Web Lanjut";
        }
        return $kuliah;
    }
}
