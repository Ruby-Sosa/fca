<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Banner;
use App\Models\ApartadoInicio;
use App\Models\AgendaDigital;
use App\Models\ApartadoAspirante;

class PaginaController extends Controller
{
    public function inicio()
    {
        $seccion = Seccion::where('pagina', 'inicio')->first();
        $banner = Banner::first();
        $apartados = ApartadoInicio::all();
        $eventos = AgendaDigital::all();

        return view('inicio', compact('seccion', 'banner', 'apartados', 'eventos'));
    }

    public function aspirantes()
    {
    $seccion = Seccion::where('pagina', 'aspirantes')->first();
    $apartados = ApartadoAspirante::orderBy('orden')->get();
    return view('aspirantes', compact('seccion', 'apartados'));
    }

    public function estudiantes()
    {
        $seccion = Seccion::where('pagina', 'estudiantes')->first();
        return view('estudiantes', compact('seccion'));
    }

    public function docentes()
    {
        $seccion = Seccion::where('pagina', 'docentes')->first();
        return view('docentes', compact('seccion'));
    }

    public function egresados()
    {
        $seccion = Seccion::where('pagina', 'egresados')->first();
        return view('egresados', compact('seccion'));
    }
}

