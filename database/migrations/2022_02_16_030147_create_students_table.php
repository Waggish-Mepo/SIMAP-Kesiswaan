<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_student', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('rayon_id');
            $table->integer('rombel_id');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nis');
            $table->string('nisn');
            $table->string('nik');
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
        Schema::dropIfExists('m_student');
    }
}
