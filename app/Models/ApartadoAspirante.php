<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApartadoAspirante extends Model
{
    protected $table = 'apartados_aspirantes';

    protected $fillable = [
        'seccion',
        'titulo',
        'subtitulo',
        'contenido',
        'imagen',
        'enlace',
        'tipo',
        'orden'
    ];
}