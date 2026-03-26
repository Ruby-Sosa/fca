<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubnavItem extends Model
{
    protected $table = 'subnav_items';

    protected $fillable = [
        'subnav_menu_id',
        'nombre',
        'href',
        'orden',
        'estatus'
    ];

    // Relación con el padre
    public function menu()
    {
        return $this->belongsTo(SubnavMenu::class, 'subnav_menu_id');
    }
}
