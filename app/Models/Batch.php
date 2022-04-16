<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $table = 'm_batch';
    protected $fillable =[
        'angkatan',
    ];

    public function Batch(){
        return $this->hasMany('App\Models\Rombel','angkatan_id','id');
    }
}
