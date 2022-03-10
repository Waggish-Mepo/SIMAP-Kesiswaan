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
        Schema::create('r_absen_rekap', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            // $table->date('tgl_absen');
            $table->integer('hadir');
            $table->integer('alpa');
            $table->integer('izin');
            $table->integer('sakit');
            // $table->integer('tugas');
            // $table->text('keterangan');
            $table->string('angkatan');
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
        Schema::dropIfExists('r_absen_rekap');
    }
}
