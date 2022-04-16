<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;

    protected $table = 'm_rombel';
    protected $fillable = [
        'rombel',
        'kompetensi',
        'angkatan_id',
    ];
    public function Student(){
        return $this->hasMany('App\Models\Student','rombel_id','id');
    }
    public function Batch(){
        return $this->belongsTo('App\Models\Batch','angkatan_id','id');
    }
}
