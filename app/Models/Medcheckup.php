<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medcheckup extends Model
{
    use HasFactory;
    protected $table = 'medcheckups';
    protected $fillable = [
        'id_medrec',
        'id_rs',
        'tanggal',
        'tinggi_badan',
        'berat_badan',
        'pregnancies',
        'glucose',
        'blood_pressure',
        'skin_thickness',
        'insulin',
        'bmi',
        'diabetes_pedigree_fx',
        'age',
    ];
}
