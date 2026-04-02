<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteDirectorio extends Model
{
    protected $table = 'docentes_directorio';

    protected $fillable = [
        'categoria_id',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'correo',
        'puesto',
        'orden'
    ];

    public function categoria()
    {
        return $this->belongsTo(DocenteDirectorioCategoria::class, 'categoria_id');
    }
}
