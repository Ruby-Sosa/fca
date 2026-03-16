<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaDigital extends Model
{
    protected $table = 'agenda_digital';

    protected $fillable = [
        'titulo',
        'fecha',
        'hora',
        'imagen',
        'enlace'
    ];
}