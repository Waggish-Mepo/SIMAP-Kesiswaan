<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'm_student';
    protected $fillable = [
       'nama',
       'rayon_id',
       'rombel_id',
       'jenis_kelamin',
       'email',
       'no_hp',
       'nis',
       'nisn',
       'nik',
    ];
    public function UserAccount(){
        return $this->belongsTo('App\Models\User','nis','userable_id')->where('role','murid');
    }
    public function Rayon(){
        return $this->belongsTo('App\Models\Rayon','rayon_id','id');
    }
    public function Rombel(){
        return $this->belongsTo('App\Models\Rombel','rombel_id','id');
    }
}
