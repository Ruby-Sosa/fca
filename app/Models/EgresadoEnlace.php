<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoEnlace extends Model
{
    protected $table = 'egresados_enlaces';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'url',
        'grupo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(EgresadoModulo::class, 'modulo_id');
    }
}