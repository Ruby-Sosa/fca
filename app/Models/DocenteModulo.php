<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteModulo extends Model
{
    protected $table = 'docentes_modulos';

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'imagen',
        'orden',
        'activo'
    ];

    public function contactos()
    {
        return $this->hasMany(DocenteContacto::class, 'modulo_id')->orderBy('orden');
    }

    public function subapartados()
    {
        return $this->hasMany(DocenteSubapartado::class, 'modulo_id')->orderBy('orden');
    }

    public function enlaces()
    {
        return $this->hasMany(DocenteEnlace::class, 'modulo_id')->orderBy('orden');
    }

    public function categoriasDirectorio()
    {
        return $this->hasMany(DocenteDirectorioCategoria::class, 'modulo_id')->orderBy('orden');
    }
}