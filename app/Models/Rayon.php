<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $table = 'm_rayon';
    protected $fillable = [
       'rayon',
       'teacher_id',
    ];

    public function Teacher(){
        return $this->hasOne('App\Models\Teacher','id','teacher_id');
    }

}
