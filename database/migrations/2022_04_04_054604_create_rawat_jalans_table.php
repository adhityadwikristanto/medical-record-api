<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_jalans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('id_medrec');
            $table->string('id_rs');
            $table->string('cara_kunjungan');
            $table->string('jenis_kunjungan');
            $table->string('tindak_lanjut');
            $table->string('status_kematian');
            $table->string('diagnosis');
            $table->string('kasus');
            $table->string('penyebab');
            $table->string('tindakan');
            $table->string('terapi');
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
        Schema::dropIfExists('rawat_jalans');
    }
}
