<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteItem extends Model
{
    protected $table = 'docentes_items';

    protected $fillable = [
        'subapartado_id',
        'titulo',
        'contenido',
        'url',
        'orden'
    ];

    public function subapartado()
    {
        return $this->belongsTo(DocenteSubapartado::class, 'subapartado_id');
    }
}