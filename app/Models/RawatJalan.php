<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;
    protected $table = 'rawat_jalans';
    protected $fillable = [
        'tanggal',
        'id_medrec',
        'id_rs',
        'cara_kunjungan',
        'jenis_kunjungan',
        'tindak_lanjut',
        'status_kematian',
        'diagnosis',
        'kasus',
        'penyebab',
        'tindakan',
        'terapi',
        'pembayaran',
    ];
}
