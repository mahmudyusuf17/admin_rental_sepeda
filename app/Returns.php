<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $fillable = [
        'tgl_return', 
        'tgl_peminjaman', 
        'id_pelanggan', 
        'id_sepeda', 
        'id_pegawai', 
        'gambar',
        'jml_sepeda',
        'denda',
        'status_pengembalian',
    ];
}
