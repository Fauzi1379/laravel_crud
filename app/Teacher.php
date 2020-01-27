<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
}
