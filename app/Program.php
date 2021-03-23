<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = [];

    public function mahad() {
        return $this->belongsTo(Mahad::class);
    }

    public function classrooms() {
        return $this->hasMany(Classroom::class);
    }
 
}