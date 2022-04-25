<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'spesialisasi',
        'id_rs',
    ];
}
