<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'm_teacher';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'no_induk_yayasan',
        'jk',
        'mata_pelajaran',
    ];
    public function Rayon(){
        return $this->belongsTo('App\Models\Rayon','teacher_id','id');
    }
}
