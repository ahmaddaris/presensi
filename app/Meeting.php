<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function attendance() {
        return $this->belongsTo(Attendance::class);
    }

    public function students() {
        return $this->belongsToMany(Student::class);
    }
}
