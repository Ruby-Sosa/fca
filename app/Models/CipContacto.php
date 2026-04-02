<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CipContacto extends Model
{
    protected $table = 'cip_contactos';

    protected $fillable = [
        'pagina_id',
        'nombre',
        'correo',
        'telefono',
        'horario',
        'ubicacion',
        'orden',
        'activo'
    ];

    public function pagina()
    {
        return $this->belongsTo(CipPagina::class, 'pagina_id');
    }
}