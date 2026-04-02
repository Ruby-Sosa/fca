<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CipPagina extends Model
{
    protected $table = 'cip_paginas';

    protected $fillable = [
        'slug',
        'titulo',
        'imagen_banner',
        'activo'
    ];

    public function secciones()
    {
        return $this->hasMany(CipSeccion::class, 'pagina_id')->orderBy('orden');
    }

    public function accesos()
    {
        return $this->hasMany(CipAcceso::class, 'pagina_id')->orderBy('orden');
    }

    public function contactos()
    {
        return $this->hasMany(CipContacto::class, 'pagina_id')->orderBy('orden');
    }
}