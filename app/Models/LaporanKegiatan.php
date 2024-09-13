<?php

// app/Models/LaporanKegiatan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKegiatan extends Model
{
    protected $fillable = [
        'nama_kegiatan', 'deskripsi', 'tanggal', 'waktu'
    ];
}
