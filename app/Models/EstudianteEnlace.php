<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudianteEnlace extends Model
{
    protected $table = 'estudiantes_enlaces';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'url',
        'grupo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(EstudianteModulo::class, 'modulo_id');
    }
}