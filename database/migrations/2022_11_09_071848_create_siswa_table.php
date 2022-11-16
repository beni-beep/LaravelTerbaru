<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
           //nis dengan tipe data integer
           $table->integer('nomor_induk_siswa');
           //nama dengan tipe data string
           $table->string('nama', 100);
           //alamt make string
           $table->string('alamat',100);
           //jenis klamin make strinh
           $table->string('jenis_kelamin');
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
        Schema::dropIfExists('siswa');
    }
}
