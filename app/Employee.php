<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 
        'jenis_kelamin', 
        'tgl_lahir', 
        'alamat', 
        'email', 
        'no_hp', 
        'jabatan',
        'gambar'
    ];
}
