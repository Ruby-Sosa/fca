<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteContacto extends Model
{
    protected $table = 'docentes_contactos';

    protected $fillable = [
        'modulo_id',
        'nombre',
        'puesto',
        'correo',
        'telefono',
        'foto',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(DocenteModulo::class, 'modulo_id');
    }
}