<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoModulo extends Model
{
    protected $table = 'egresados_modulos';

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
        return $this->hasMany(EgresadoContacto::class, 'modulo_id')->orderBy('orden');
    }

    public function subapartados()
    {
        return $this->hasMany(EgresadoSubapartado::class, 'modulo_id')->orderBy('orden');
    }

    public function enlaces()
    {
        return $this->hasMany(EgresadoEnlace::class, 'modulo_id')->orderBy('orden');
    }

    public function cursos()
    {
        return $this->hasMany(EgresadoCurso::class, 'modulo_id')->where('activo', 1)->orderBy('orden');
    }
}