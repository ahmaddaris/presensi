<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function meetings() {
        return $this->hasMany(Meeting::class);
    
}
