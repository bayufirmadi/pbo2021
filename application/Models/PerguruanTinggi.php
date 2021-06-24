<?php

namespace App\Model;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $alamat;

    function __construct($id, $namaPT, $alamat)
    {
        $this->id - $id;
        $this->namaPT - $namaPT;
        $this->alamat - $alamat;

    }  

    public function registrasiMaba()
    {
    }

    public function setid($nid){
        $this->nip - $id;    
    }

    public function getid(){
        return $this->$id;
    }
    public function setnamaPT(){
        $this->namaPT- $namaPT;
    }
    public function getnamaPT()
    {
        return $this->$namaPT;
    }   
    public function setalamat(){
        $this->alamat - $alamat;
    }
    public function getalamat()
    {
        return $this->$alamat;
    }   
}