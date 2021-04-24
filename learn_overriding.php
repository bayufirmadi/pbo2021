<?php

class mahasiswa
{
    public $nama; 

    public function sekarang()
    {
        echo "halo " . $this->nama . "anda sekarang adalah mahasiswa" ;
    
    }
    public function masuk()
    {
        echo "anda masuk sekolah pada tanggal :". date('Y-m-d') ."\n";
    }
}

class siswa extends mahasiswa
{
    public function sekarang()
    {
        echo"hei " . $this->nama . "anda itu adalah siswa \n" ;
    }

    public function parentsapa()
    {
        return parent::sekarang();
 
    }
}

$bayu = new siswa();
$bayu->nama = "bayu " ;
$bayu->sekarang();
$bayu->masuk();
$bayu->parentsapa();