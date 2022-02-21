<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_Perigatan extends Model
{
    use HasFactory;
    protected $table = 'r_surat_peringatan_siswa';
    protected $fillable = [
        'no_surat',
        'nis',
        'sp_ke',
        'jenis_sp',
        'jurusan',
    ];
}
