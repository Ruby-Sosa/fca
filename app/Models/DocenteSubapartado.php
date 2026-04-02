<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteSubapartado extends Model
{
    protected $table = 'docentes_subapartados';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'contenido',
        'tipo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(DocenteModulo::class, 'modulo_id');
    }

    public function items()
    {
        return $this->hasMany(DocenteItem::class, 'subapartado_id')->orderBy('orden');
    }
}