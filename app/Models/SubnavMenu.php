<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubnavMenu extends Model
{
    protected $table = 'subnav_menus';

    protected $fillable = [
        'nombre',
        'orden',
        'estatus'
    ];

    // Relación con items (hijos)
    public function items()
    {
        return $this->hasMany(SubnavItem::class, 'subnav_menu_id')
                    ->orderBy('orden');
    }
}
