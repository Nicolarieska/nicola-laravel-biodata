<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class nicola extends Model
{
    public static $nama = "NICOLA ARIESKA FONDA";

    public static function getNama()
    {
        return self::$nama;
    }

    public static $ttl = "MALANG, 15 APRIL 2002";

    public static function getTtl()
    {
        return self::$ttl;
    }

    public static $jk = "LAKI - LAKI";

    public static function getJk()
    {
        return self::$jk;
    }

    public static $goldar = "O";

    public static function getGoldar()
    {
        return self::$goldar;
    }

    public static $alamat = "PURI CEMPAKA PUTIH 1, KOTA MALANG, JAWA TIMUR 65132";

    public static function getAlamat()
    {
        return self::$alamat;
    }

    public static $pekerjaan = "MAHASISWA";

    public static function getPekerjaan()
    {
        return self::$pekerjaan;
    }

    public static function getSekolah($data)
    {
        if($data===1)
        {
            $sekolah = "TK AL-HIKMAH (2006 - 2008)";

        }elseif($data===2)
        {
            $sekolah = "SDN ARJOWINANGUN 2 (2008 - 2014)";

        }elseif($data===3){
            
            $sekolah = "SMPN 5 MALANG (2014 - 2017)";

        }elseif($data===4){
            
            $sekolah = "SMAN 10 MALANG (2017 - 2020)";

        }else{
            
            $sekolah = "POLITEKNIK NEGERI MALANG (2020 - SEKARANG)";

        }
        return $sekolah;
    }
}
