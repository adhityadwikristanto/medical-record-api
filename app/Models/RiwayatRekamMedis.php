<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatRekamMedis extends Model
{
    use HasFactory;
    protected $table = 'riwayat_rekam_medis';
    protected $fillable = [
        'hash',
        'id_medrec',
        'id_rs',
        'nama_file',
    ];
}
