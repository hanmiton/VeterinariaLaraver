<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    //
    protected $guarded = [];

    public function medico()
    {
    	return $this->belongsTo(Medico::class);
    }
}
