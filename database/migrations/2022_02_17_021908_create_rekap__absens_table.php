<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_absen_periode', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nama');
            $table->string('rombel_id');
            $table->string('rayon_id');
            $table->date('tgl_absen');
            $table->boolean('hadir');
            $table->boolean('alpa');
            $table->boolean('izin');
            $table->boolean('sakit');
            $table->boolean('tugas');
            $table->text('keterangan');
            $table->string('tahun_pelajaran');
            $table->string('semester');
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
        Schema::dropIfExists('r_absen_periode');
    }
}
