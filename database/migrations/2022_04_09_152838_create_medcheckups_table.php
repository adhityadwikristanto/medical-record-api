<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedcheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medcheckups', function (Blueprint $table) {
            $table->id();
            $table->string("id_medrec");
            $table->string("id_rs");
            $table->date("tanggal");
            $table->double("tinggi_badan");
            $table->double("berat_badan");
            $table->integer("pregnancies");
            $table->double("glucose");
            $table->double("blood_pressure");
            $table->double("skin_thickness");
            $table->double("insulin");
            $table->double("bmi");
            $table->double("diabetes_pedigree_fx");
            $table->integer("age");
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
        Schema::dropIfExists('medcheckups');
    }
}
