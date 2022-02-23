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
            $table->string('nis');
            $table->string('jurusan');
            $table->integer('sp_ke');
            $table->integer('skor');
            $table->int('status');
            $table->text('ket');
            $table->date('tgl_cetak');
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
