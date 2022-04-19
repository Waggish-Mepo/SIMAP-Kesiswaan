<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
    use HasFactory;
    protected $table = 'r_surat_ijin_mengemudi_siswa';
    protected $fillable = [
        'nis',
        'foto_selfie_sim',
        'file_endpoint',
    ];
    public function Murid(){
        return $this->belongsTo('App\Models\Student','nis','nis');
    }
}
