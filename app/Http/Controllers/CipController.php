<?php

namespace App\Http\Controllers;

use App\Models\CipPagina;

class CipController extends Controller
{
    public function index()
    {
        $pagina = CipPagina::where('slug', 'cip')
            ->where('activo', 1)
            ->with(['secciones', 'accesos', 'contactos'])
            ->firstOrFail();

        return view('cip.index', compact('pagina'));
    }
}
