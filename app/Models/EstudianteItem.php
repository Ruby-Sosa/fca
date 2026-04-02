<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudianteItem extends Model
{
    protected $table = 'estudiantes_items';

    protected $fillable = [
        'subapartado_id',
        'titulo',
        'contenido',
        'url',
        'orden'
    ];

    public function subapartado()
    {
        return $this->belongsTo(EstudianteSubapartado::class, 'subapartado_id');
    }
}