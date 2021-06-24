<?php

namespace App\Model;

require_once('Pengguna.php');

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMatkul()
    {
    }

    public function setnim(){
        $this->nim - $nim;
    }
    public function getnim()
    {
        return $this->$judulTA;
    }   
    public function setnama(){
        $this->nama - $nama;
    }
    public function getnama()
    {
        return $this->$nama;
    }   
    public function setIPK(){
        $this->IPK - $IPK;
    }
    public function getIPK()
    {
        return $this->$IPK;
    }
    public function setalamat(){
        $this->alamat - $alamat;
    }
    public function getalamat()
    {
        return $this->$alamat;
    } 
    
}