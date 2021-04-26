<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $table = 'students';
    protected $fillable = [
        'name', 'address', 'wa', 'detail', 'created_at', 'updated_at'
    ];

    public function meetings() {
        return $this->belongsToMany(Meeting::class);
    }
}
