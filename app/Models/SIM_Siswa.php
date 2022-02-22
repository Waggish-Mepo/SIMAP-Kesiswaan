<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIM_Siswa extends Model
{
    use HasFactory;
    protected $table = 'r_sim_siswa';
    protected $fillable = [
        'nis',
        'bukti_foto'
    ];
}
