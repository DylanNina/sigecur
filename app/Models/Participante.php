<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'curso_id'
    ];

    public function curso()
    {
        return $this->belongsTo(Course::class,'curso_id');
    }

}