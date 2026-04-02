<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoItem extends Model
{
    protected $table = 'egresados_items';

    protected $fillable = [
        'subapartado_id',
        'titulo',
        'contenido',
        'url',
        'orden'
    ];

    public function subapartado()
    {
        return $this->belongsTo(EgresadoSubapartado::class, 'subapartado_id');
    }
}