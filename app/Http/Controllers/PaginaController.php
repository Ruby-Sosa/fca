<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Banner;
use App\Models\ApartadoInicio;
use App\Models\AgendaDigital;
use App\Models\ApartadoAspirante;
use App\Models\EstudianteModulo;
use App\Models\DocenteModulo;
use App\Models\EgresadoModulo;

class PaginaController extends Controller
{
    public function inicio()
{
    $seccion = Seccion::where('pagina', 'inicio')->first();
    $banners = Banner::where('estatus', 1)
        ->orderBy('orden')
        ->get();
    $apartados = ApartadoInicio::all();
    $eventos = AgendaDigital::all();

    return view('inicio', compact('seccion', 'banners', 'apartados', 'eventos'));
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

    $modulos = EstudianteModulo::with([
        'contactos',
        'subapartados.items',
        'enlaces'
    ])
    ->where('activo', 1)
    ->orderBy('orden')
    ->get();

    return view('estudiantes', compact('seccion', 'modulos'));
}

    public function docentes()
    {
        $seccion = Seccion::where('pagina', 'docentes')->first();

        $modulos = DocenteModulo::with([
            'contactos',
            'subapartados.items',
            'enlaces',
            'categoriasDirectorio.docentes'
        ])
        ->where('activo', 1)
        ->orderBy('orden')
        ->get();

        return view('docentes', compact('seccion', 'modulos'));
    }

    public function egresados()
{
    $seccion = Seccion::where('pagina', 'egresados')->first();

    $modulos = EgresadoModulo::with([
        'contactos',
        'subapartados.items',
        'enlaces',
        'cursos'
    ])
    ->where('activo', 1)
    ->orderBy('orden')
    ->get();

    return view('egresados', compact('seccion', 'modulos'));
}
}

