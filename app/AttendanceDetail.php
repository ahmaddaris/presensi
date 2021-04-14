<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }
    
}
