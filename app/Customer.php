<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 
        'jenis_kelamin', 
        'alamat', 
        'email', 
        'no_hp', 
        'merk_sepeda', 
        'jenis_sepeda',
        'tgl_sewa',
        'tgl_return',
        'jaminan',
        'bukti_jaminan',
        'keterangan',
    ];
}
