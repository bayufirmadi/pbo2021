<?php
namespace App;


use App\Minuman;

class Teh implements Minuman
{
    public function buat()
    {
        echo "seduh air sampai mendidih";
        echo "masukan gula dan teh ke gelas";
        echo "masukkan air ke";
        echo "lalu aduk hingga merata";
        echo "teh telah siap";
    }
    public function minum()
    {
        echo "nikmati setiap tegukannya";
    }
    public function nyaman()
    {
        echo "teh itu sehat";
    }
}