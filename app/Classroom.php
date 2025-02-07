<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];

    public function program() {
        return $this->belongsTo(Program::class);
    }
    
    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
}