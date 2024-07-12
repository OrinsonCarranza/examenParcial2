<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',       
        'apellido',     
        'curso',
        'nota1',
        'nota2',
        'promedio',
        'fecha_registro',
        'condicion',
    ];
}
