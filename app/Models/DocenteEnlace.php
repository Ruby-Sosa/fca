<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteEnlace extends Model
{
    protected $table = 'docentes_enlaces';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'url',
        'grupo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(DocenteModulo::class, 'modulo_id');
    }
}