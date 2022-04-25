<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;
    protected $table = 'medrecs';
    protected $fillable = [
        'nama',
        'alamat',
        'jenis',
        'kelas',
        'kepemilikan',
        'tempat_tiur',
    ];
}
