<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CipAcceso extends Model
{
    protected $table = 'cip_accesos';

    protected $fillable = [
        'pagina_id',
        'titulo',
        'icono',
        'url',
        'texto_boton',
        'orden',
        'activo'
    ];

    public function pagina()
    {
        return $this->belongsTo(CipPagina::class, 'pagina_id');
    }
}