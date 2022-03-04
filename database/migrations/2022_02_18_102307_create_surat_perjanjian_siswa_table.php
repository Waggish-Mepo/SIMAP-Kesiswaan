<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPerjanjianSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_surat_perjanjian_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->varchar('jenis_perjanjian');
            $table->date('tgl');
            $table->integer('skor');
            $table->integer('status');
            $table->text('ket');
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
        Schema::dropIfExists('r_surat_perjanjian_siswa');
    }
}
