@extends('layouts.app')

@section('title','Inicio')

@section('content')

{{-- Banner principal --}}
@if($banner)
<section class="mb-5">
    <div class="container-fluid px-0">
        <div class="position-relative overflow-hidden shadow-sm">
            <img src="{{ asset('img/'.$banner->imagen) }}" 
                 class="w-100"
                 style="height:460px; object-fit:cover;"
                 alt="{{ $banner->titulo }}">
        </div>
    </div>
</section>
@endif

{{-- Bienvenida --}}
<section class="py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white shadow-sm rounded-4 p-4 p-md-5 text-center border">
    <span class="text-uppercase fw-semibold subtitulo-fca">
        Bienvenidos 
    </span>
    <h2 class="fw-bold mt-2 mb-3 titulo-fca">
    {{ $seccion->titulo }}
    </h2>
    {{-- 🔥 DESCRIPCIÓN --}}
    <p class="descripcion-fca">
        Fundada en 1962 como la Escuela de Comercio y Administración, la Facultad de Contaduría y Administración (FCA) es actualmente el plantel con mayor matrícula de estudiantes en la Universidad Autónoma de Yucatán. 
        Ubicada en el Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, la institución ofrece cuatro licenciaturas: Contador Público (con presencia en Mérida y Tizimín), Administración, Mercadotecnia y Negocios Internacionales, y Administración de Tecnologías de Información. 
        Asimismo, su Unidad de Posgrado e Investigación imparte maestrías especializadas en Finanzas, Impuestos, Mercadotecnia Digital y Dirección Estratégica.
    </p>
</div>
            </div>
        </div>
    </div>
</section>

{{-- Noticias --}}
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="text-uppercase fw-semibold" style="color:#c69214; letter-spacing:1px; font-size:.85rem;">
                    Actualidad
                </span>
                <h3 class="fw-bold mb-0" style="color:#0b2c55;">Noticias</h3>
            </div>
        </div>

        <div class="row g-4">
            @foreach($apartados as $apartado)
                @include('components.card_noticia',[
                    'titulo'=>$apartado->titulo,
                    'imagen'=>$apartado->imagen,
                    'fecha'=>\Carbon\Carbon::parse($apartado->fecha)->format('d \d\e F \d\e Y'),
                    'descripcion'=>$apartado->descripcion,
                    'enlace'=>$apartado->enlace
                ])
            @endforeach
        </div>
    </div>
</section>

{{-- Agenda Digital --}}
<section class="py-4 pb-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="text-uppercase fw-semibold" style="color:#c69214; letter-spacing:1px; font-size:.85rem;">
                    Participa
                </span>
                <h3 class="fw-bold mb-0" style="color:#0b2c55;">Agenda Digital Universitaria</h3>
            </div>
        </div>

        <div class="row g-4">
            @foreach($eventos as $evento)
                @include('components.card_evento',[
                    'titulo'=>$evento->titulo,
                    'imagen'=>$evento->imagen,
                    'fecha'=>\Carbon\Carbon::parse($evento->fecha)->format('d \d\e F \d\e Y'),
                    'hora'=>$evento->hora,
                    'enlace'=>$evento->enlace
                ])
            @endforeach
        </div>
    </div>
</section>

@endsection