<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Temuan extends Model
{
    use HasFactory;
    protected $table = 'r_barang_temuan';
    protected $fillable = [
        'nis',
        'penemu',
        'tgl',
        'foto_barang',
        'image_path',
        'ket',
        'status'
    ];

    public function Student(){
        return $this->hasOne('App\Models\Student', 'id', 'nis');
    }

    public function Penemu(){
        return $this->hasOne('App\Models\Student', 'id', 'penemu');
    }
}