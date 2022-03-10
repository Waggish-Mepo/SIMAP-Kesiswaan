<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_barang_temuan', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('penemu');
            $table->date('tgl');
            $table->string('foto_barang');
            // $table->string('foto_endpoint');
            $table->text('ket');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('r_barang_temuan');
    }
}
