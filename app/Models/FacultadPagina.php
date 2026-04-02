<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultadPagina extends Model
{
    protected $table = 'facultad_paginas';

    protected $fillable = [
    'slug',
    'titulo',
    'descripcion',
    'imagen',
    'contenido',
    'mision',
    'vision',
    'contacto_titulo',
    'contacto_correo',
    'contacto_texto',
    'redes_texto',
    'redes_links',
    'orden',
    'activo'
    ];
}
