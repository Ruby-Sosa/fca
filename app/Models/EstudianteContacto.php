<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstudianteContacto extends Model
{
    protected $table = 'estudiantes_contactos';

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
        return $this->belongsTo(EstudianteModulo::class, 'modulo_id');
    }
}