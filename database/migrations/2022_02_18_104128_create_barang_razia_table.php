<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangRaziaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_barang_razia', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('nama_pemilik');
            $table->string('nis');
            $table->integer('rombel_id');
            $table->integer('rayon_id');
            $table->string('jenis');
            $table->string('merk');
            $table->string('warna');
            $table->boolean('status');
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
        Schema::dropIfExists('r_barang_razia');
    }
}
