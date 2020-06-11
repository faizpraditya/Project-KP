<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    //
    protected $fillable = ['nama', 'email', 'no_hp', 'alamat', 'tgl_lahir', 'pekerjaan', 'status'];
    // Kalo mau pake method create harus pake fillable atau guarded.
    // fillable yang boleh diisi, guarded yang tidak boleh diisi.

    // protected $dateFormat = 'U';
}
