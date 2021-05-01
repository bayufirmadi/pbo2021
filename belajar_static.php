<?php

require('initialize.php');

use application\backend\Mahasiswa;

$bayu = new Mahasiswa('H1101191047','bayu firmadia','10-18-2001','laki-laki' ); 

Mahasiswa::bergerak();

echo Mahasiswa::$status ."<br/>";

$status_mahasiswa = mahasiswa::NONAKTIF ;
echo $status_mahasiswa. '<br>';

echo Mahasiswa::hitungsks(5,2);