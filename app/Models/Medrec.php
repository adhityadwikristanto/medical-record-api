<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medrec extends Model
{
    use HasFactory;
    protected $table = 'medrecs';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'alamat',
        'agama',
        'status_nikah',
        'pendidikan',
        'pekerjaan',
        'kewarganegaraan',
        'pembayaran',
        'penanggungjawab',
        'no_telp',
        'klinik_tujuan',
        'tanggal_rekam',
    ];
}
