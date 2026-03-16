<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApartadoInicio extends Model
{
    protected $table = 'apartados_inicio';

    protected $fillable = [
        'titulo',
        'fecha',
        'descripcion',
        'imagen',
        'enlace'
    ];
}