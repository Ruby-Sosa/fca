<?php

namespace App\Http\Controllers;

use App\Models\FacultadPagina;

class FacultadController extends Controller
{
    public function mostrarAcerca()
    {
        $pagina = FacultadPagina::where('slug', 'acerca')
            ->where('activo', 1)
            ->firstOrFail();

        return view('acerca', compact('pagina'));
    }

    public function mostrarSlug($slug)
    {
        $pagina = FacultadPagina::where('slug', $slug)
            ->where('activo', 1)
            ->firstOrFail();

        return view('acerca', compact('pagina'));
    }
}