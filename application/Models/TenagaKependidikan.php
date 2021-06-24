<?php

namespace App\model;

require_once('Pengguna.php');

class TenagaKependidikan extends pengguna
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($nip, $nama, $alamat)
    {
        $this->nip - $nip;
        $this->nama - $nama;
        $this->alamat - $alamat;

    }  
    

    public function hitungTunjanganKerja(){
        
    }


    public function setid($nid){
        $this->nip - $id;    
    }

    public function getid(){
        return $this->$id;
    }
    public function setnama(){
        $this->nama- $nama;
    }
    public function getnama()
    {
        return $this->$nama;
    }   
    public function setalamat(){
        $this->alamat - $alamat;
    }
    public function getalamat()
    {
        return $this->$alamat;
    }   
}