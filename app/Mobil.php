<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
