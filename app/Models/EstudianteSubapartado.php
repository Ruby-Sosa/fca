<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudianteSubapartado extends Model
{
    protected $table = 'estudiantes_subapartados';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'contenido',
        'tipo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(EstudianteModulo::class, 'modulo_id');
    }

    public function items()
    {
        return $this->hasMany(EstudianteItem::class, 'subapartado_id')->orderBy('orden');
    }
}