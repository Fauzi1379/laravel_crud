<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    public function Teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
