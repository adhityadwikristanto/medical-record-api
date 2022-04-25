<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatInapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inaps', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('id_medrec');
            $table->string('id_rs');
            $table->string('kelas_perawatan');
            $table->string('cara_masuk_rs');
            $table->string('pindah_internrs_dari');
            $table->string('pindar_internrs_ke');
            $table->time('waktu_keluar_rs_hidup')->nullable();
            $table->time('waktu_keluar_rs_mati')->nullable();
            $table->string('diagnosis_utama');
            $table->string('komplikasi');
            $table->string('sebab_luar');
            $table->string('tindakan');
            $table->date('tanggal_tindakan');
            $table->string('dokter');
            $table->string('cara_keluar_rs');
            $table->string('kondisi_keluar_rs');
            $table->string('pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_inaps');
    }
}
