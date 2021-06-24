<?php

namespace App\Model;

class PerguruanTinggi{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA  ;
    protected $pengujiTA  ;

    function __construct($id, $judul, $manasiswa, $pembimbing, $penguji)
    {
        $this->id - $id;
        $this->judulTA - $judul;
        $this->mahasiswaTA - $manasiswa;
        $this->pembimbingTA - $pembimbing;
        $this->pengujiTA - $penguji;
        
    }
    public function tambahTA()
    {

    }
    public function setid($nid){
        $this->nip - $id;    
    }

    public function getid(){
        return $this->$id;
    }
    public function setjudulTA(){
        $this->judulTA- $judulTA;
    }
    public function getjudulTA()
    {
        return $this->$judulTA;
    }   
    public function setmahasiswaTA(){
        $this->mahasiswaTA - $mahasiswaTA;
    }
    public function getmahasiswaTA()
    {
        return $this->$mahasiswaTA;
    }   
    public function setpembimbingTA(){
        $this->pembimbingTA - $pembimbingTA;
    }
    public function getpembimbingTA()
    {
        return $this->$pembimbingTA;
    }
    public function setpengujiTA(){
        $this->pengujiTA - $pengujiTA;
    }
    public function getpengujiTA()
    {
        return $this->$pengujiTA;
    }     


}