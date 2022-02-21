<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_Perjanjian extends Model
{
    use HasFactory;
    protected $table = 'r_surat_perjanjian_siswa';
    protected $fillable = [
        'nis',
        'jenis_sp',
        'jurusan'
    ];
}
