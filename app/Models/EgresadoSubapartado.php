<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoSubapartado extends Model
{
    protected $table = 'egresados_subapartados';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'contenido',
        'tipo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(EgresadoModulo::class, 'modulo_id');
    }

    public function items()
    {
        return $this->hasMany(EgresadoItem::class, 'subapartado_id')->orderBy('orden');
    }
}