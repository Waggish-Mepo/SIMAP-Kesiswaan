<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_surat_ijin_mengemudi_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('foto_selfie_sim');
            $table->string('file_endpoint');
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
        Schema::dropIfExists('r_surat_ijin_mengemudi_siswa');
    }
}
