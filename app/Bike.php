<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'merk', 
        'jenis', 
        'no_rangka', 
        'warna', 
        'gambar', 
        'deskripsi', 
        'jml_sepeda',
        'harga_sewa',
        'status'
    ];
}
