<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_teacher', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nuptk');
            $table->bigInteger('nik');
            $table->bigInteger('no_induk_yayasan');
            $table->bigInteger('no_ukg');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('nama_ibu_kandung');
            $table->string('nama_ayah_kandung');
            $table->string('alamat_jalan');
            $table->tinyInteger('rt');
            $table->tinyInteger('rw');
            $table->string('dusun');
            $table->string('kelurahan_desa');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->string('lintang');
            $table->string('bujur');
            $table->integer('no_kartu_keluarga');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->integer('npwp');
            $table->string('nama_wajib_pajak');
            $table->string('status_perkawinan');
            $table->integer('nip_suami_istri');
            $table->string('pekerjaan_suami_istri');
            $table->boolean('status_kepegawaian');
            $table->string('jenis_ptk');
            $table->string('sk_pengangkatan');
            $table->string('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan');
            $table->string('sc_cpns');
            $table->string('tmt_cpns');
            $table->string('pangkat_golongan');
            $table->string('sumber_gaji');
            $table->integer('kartu_pegawai');
            $table->integer('kartu_suami_istri');
            $table->string('lisensi_kepala_sekolah');
            $table->integer('no_registrasi_nuksi');
            $table->string('keahlian_laboratorium');
            $table->boolean('mampu_menangani_kebutuhan_khusus');
            $table->string('keahlian_braile');
            $table->string('keahlian_bahasa_isyarat');
            $table->integer('no_telp_rumah');
            $table->integer('no_hp');
            $table->integer('no_surat_tugas');
            $table->date('tgl_surat_tugas');
            $table->string('tmt_tugas');
            $table->boolean('status_sekolah_induk');
            $table->boolean('jenis_sertifikasi');
            $table->bigInteger('no_sertifikasi');
            $table->bigInteger('tahun_sertifikasi');
            $table->string('bidang_studi_sertifikasi');
            $table->string('nrg_sertifikasi');
            $table->integer('no_peserta_sertifikasi');
            $table->string('jenjang_pendidikan');
            $table->string('gelar_akademi');
            $table->string('satuan_pendidikan');
            $table->integer('tahun_masuk');
            $table->integer('tahun_keluar');
            $table->integer('no_induk');
            $table->double('ipk');
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
        Schema::dropIfExists('m_teacher');
    }
}
