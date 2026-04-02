<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocenteDirectorioCategoria extends Model
{
    protected $table = 'docentes_directorio_categorias';

    protected $fillable = [
        'modulo_id',
        'titulo',
        'orden'
    ];

    public function modulo()
    {
        return $this->belongsTo(DocenteModulo::class, 'modulo_id');
    }

    public function docentes()
    {
        return $this->hasMany(DocenteDirectorio::class, 'categoria_id')->orderBy('orden');
    }
}