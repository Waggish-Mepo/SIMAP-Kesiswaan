<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap_Absen extends Model
{
    use HasFactory;
    protected $table = 'r_absen_rekap';
    protected $fillable = [
        'nis',
        'hadir',
        'alpa',
        'izin',
        'sakit',
        // 'keterangan',
        'angkatan',
        'semester',
    ];
    public function Murid(){
        return $this->belongsTo('App\Models\Student','nis', 'nis');
    }
}
