<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode_Absen extends Model
{
    use HasFactory;
    protected $table = 'r_absen_periode';
    protected $fillable = [
        'tanggal_absen',
        'nis',
        'tanggal',
    ];
    public function Murid(){
        return $this->belongsTo('App\Models\Student','nis');
    }
}
