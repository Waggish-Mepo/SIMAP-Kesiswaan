<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'm_student';
    protected $fillable = [
        ''
    ];

    public function Rayon(){
        return $this->hasOne('App\Models\Rayon', 'id', 'rayon_id');
    }

    public function Rombel(){
        return $this->hasOne('App\Models\Rombel', 'id', 'rombel_id');
    }
}
