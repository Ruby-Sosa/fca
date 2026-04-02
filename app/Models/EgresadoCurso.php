<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoCurso extends Model
{
    protected $table = 'egresados_cursos';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'imagen',
        'fecha_texto',
        'descripcion',
        'enlace',
        'orden',
        'activo'
    ];

    public function modulo()
    {
        return $this->belongsTo(EgresadoModulo::class, 'modulo_id');
    }
}