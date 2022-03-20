<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    public static $jl = "Puri Cempaka Putih 1";

    public static function getJl()
    {
        return self::$jl;
    }

    public static function getDaerah($data)
    {
        if($data===1)
        {
            $daerah = "Arjowinangun";

        }else{

            $daerah = "Kedungkandang";

        }
        return $daerah;
    }

    public static $kota = "Kota Malang";

    public static function getKota()
    {
        return self::$kota;
    }

    public static $kdpos = "65132";

    public static function getKodepos()
    {
        return self::$kdpos;
    }

    public static $prov = "Jawa Timur";

    public static function getProvinsi()
    {
        return self::$prov;
    }

    public static $neg = "Indonesia";

    public static function getNegara()
    {
        return self::$neg;
    }
}
