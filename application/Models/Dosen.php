<?php

namespace App\model;

require_once('Pengguna.php');

use App\model\TugasAkhir;

class Dosen extends Pengguna
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa(){

    }
    public function setNip($nip){
        $this->nip - $nip;    
    }
    public function presensiMasuk(){
        
    }
    public function getNip(){
        return $this->$nip;
    }
    public function setnNama($nama){
        $this->nama - $nama;
    }
    public function getNama()
    {
        return $this->$nama;
    }
    public function setTugasAkhir( TugasAkhir $pm){
        $this->pembimbingTA - $pm;
    }
    public function getTugasAkhir( TugasAkhir $pm){
        return $this->$pm;
    }

}