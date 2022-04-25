<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedrecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medrecs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status_nikah');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('pembayaran');
            $table->string('penanggungjawab');
            $table->string('no_telp');
            $table->string('klinik_tujuan');
            $table->date('tanggal_rekam');
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
        Schema::dropIfExists('medrecs');
    }
}
