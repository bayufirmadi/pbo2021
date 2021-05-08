<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\Teh;

$cendol_dian = new Cendol();
$cendol_dian->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();

$kopi_asiang = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$teh_bayu = new Teh();
$teh_bayu->buat();
$teh_bayu->nyaman();
