<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    use HasFactory;
    protected $table = 'rawat_inaps';
    protected $fillable = [
        'tanggal',
        'id_medrec',
        'id_rs',
        'kelas_perawatan',
        'cara_masuk_rs',
        'pindah_internrs_dari',
        'pindar_internrs_ke',
        'waktu_keluar_rs_hidup',
        'waktu_keluar_rs_mati',
        'diagnosis_utama',
        'komplikasi',
        'sebab_luar',
        'tindakan',
        'tanggal_tindakan',
        'dokter',
        'cara_keluar_rs',
        'kondisi_keluar_rs',
        'pembayaran',
    ];
}
