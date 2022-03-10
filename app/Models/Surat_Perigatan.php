<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_Perigatan extends Model
{
    use HasFactory;
    protected $table = 'r_surat_peringatan_siswa';
    protected $fillable = [
        'nis',
        'sp_ke',
        'skor',
        'tgl',
        'status',
        'ket',
    ];

    public function Student()
    {
        return $this->hasOne('App\Models\Student', 'nis', 'nis');
    }
}
