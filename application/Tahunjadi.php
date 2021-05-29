<?php

namespace App;

/**
 * Trait untuk tanggal lahir
 */
trait Tahunjadi
{
    public function hariJadi($tanggal, $bulan, $tahun)
    {
        return "Anda lahir pada tanggal $tanggal, bulan $bulan, tahun $tahun";
    }
}