<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuNav extends Model
{
    protected $table = 'menu_nav';

    protected $fillable = [
        'nombre_item',
        'href',
        'orden',
        'estatus'
    ];
}