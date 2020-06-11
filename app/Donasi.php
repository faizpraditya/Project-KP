<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    //
    protected $fillable = ['no_bukti', 'tgl_donasi', 'nama_amil', 'alamat', 'nama_donatur', 'debet', 'kredit', 'keterangan', 'rincian_roa', 'saldo'];
}
