<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public $fillable = [
        'nombres',
        'apellidos',
        'tipo_documento',
        'numero_documento',
        'fecha_expedicion_documento',
        'fecha_nacimiento',
        'telefono',
        'correo',
        'tipo_sangre',
        'rh',
        'alergias',
        'sexo',
        'genero',
    ];

    // Las relaciones van aquí
}
