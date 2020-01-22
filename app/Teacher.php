<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function Mobil(Type $var = null)
    {
        return $this->belongsTo(Mobil::class);
    }
}
