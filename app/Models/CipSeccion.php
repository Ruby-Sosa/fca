<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CipSeccion extends Model
{
    protected $table = 'cip_secciones';

    protected $fillable = [
        'pagina_id',
        'tipo',
        'titulo',
        'subtitulo',
        'contenido',
        'cita',
        'autor_cita',
        'imagen',
        'orden',
        'activo'
    ];

    public function pagina()
    {
        return $this->belongsTo(CipPagina::class, 'pagina_id');
    }
}