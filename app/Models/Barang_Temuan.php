<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Temuan extends Model
{
    use HasFactory;
    protected $table = 'r_barang_razia';
    protected $fillable = [
        'nama_barang',
        'jenis',
        'merk',
        'warna',
        'status'
    ];
}
