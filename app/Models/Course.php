<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'categoria',
        'version',
        'turno',
        'cupo',
        'requiere_aprobacion',
        'estado'
    ];
}
