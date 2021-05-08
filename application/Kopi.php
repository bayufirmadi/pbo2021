<?php
namespace App;


use App\Minuman;

class Kopi implements Minuman
{
    public function buat()
    {
    echo "masak air panas hingga 100 derajat celcius";
    echo "masukan kopi ke dlam gelas dan tuangkan air panas ";
    echo "aduk sebanyak 60 kali putaran";
    echo "diamkan selama 15 menit";
    echo "tambahkan gula aren";
    }
    public function minum()
    {
        echo "di seruput sedikit demi sedikit";
    }
    public function tambahSusu()
    {

    }
}