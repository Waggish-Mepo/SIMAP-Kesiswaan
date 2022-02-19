<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPeringatanSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_surat_peringatan_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('nis');
            $table->string('nama');
            $table->integer('rombel_id');
            $table->integer('rayon_id');
            $table->integer('sp_ke');
            $table->string('jenis_sp');
            $table->string('jurusan');
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
        Schema::dropIfExists('r_surat_peringatan_siswa');
    }
}
