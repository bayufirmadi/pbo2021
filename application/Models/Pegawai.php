<?php 
namespace App\Model;

interface Pegawai
{
    public function setNip($nip);
    public function presensiMasuk();
    public function getNip();
    public function setnNama($nama);
    public function getNama();
}