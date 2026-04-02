<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudianteModulo extends Model
{
    protected $table = 'estudiantes_modulos';

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
        return $this->hasMany(EstudianteContacto::class, 'modulo_id')->orderBy('orden');
    }

    public function subapartados()
    {
        return $this->hasMany(EstudianteSubapartado::class, 'modulo_id')->orderBy('orden');
    }

    public function enlaces()
    {
        return $this->hasMany(EstudianteEnlace::class, 'modulo_id')->orderBy('orden');
    }
}