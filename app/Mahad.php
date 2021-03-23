<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahad extends Model
{
    protected $fillable = [
        'name'
    ];

    public function programs() {
        return $this->hasMany(Program::class);
    }
}
