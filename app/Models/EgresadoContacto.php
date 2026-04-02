<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EgresadoContacto extends Model
{
    protected $table = 'egresados_contactos';

    protected $fillable = [
        'modulo_id',
        'nombre',
        'puesto',
        'correo',
        'telefono',
        'horario',
        'foto',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(EgresadoModulo::class, 'modulo_id');
    }
}
