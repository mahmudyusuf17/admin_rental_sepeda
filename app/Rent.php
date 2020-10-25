<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'tgl_sewa', 
        'tgl_return', 
        'durasi_sewa', 
        'id_pelanggan', 
        'id_sepeda', 
        'id_pegawai', 
        'gambar',
        'jml_sepeda',
        'fasilitas',
        'total_harga',
        'jaminan',
        'keterangan',
        'status_pembayaran'
    ];
}
