<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';

    protected $fillable = [
        'pagina',
        'titulo',
        'contenido',
        'imagen'
    ];
}