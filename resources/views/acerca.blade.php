@extends('layouts.interno')

@section('title', $pagina->titulo)

@section('content')

<div class="text-center mb-4">
    <h1 class="titulo-fca">{{ $pagina->titulo }}</h1>
</div>


@if($pagina->imagen)
    <div class="mb-4 text-center">
        <img src="{{ asset('img/'.$pagina->imagen) }}"
             class="img-fluid rounded"
             alt="{{ $pagina->titulo }}"
             style="max-width: 980px; width:100%;">
    </div>
@endif

<div class="container">
    @if($pagina->descripcion)
        <div class="mb-4">
    <h3 class="fw-bold mb-3" style="color:#0b2c55;">
        La Facultad de Contaduría y Administración de la UADY
    </h3>

    @if($pagina->descripcion)
        <p class="descripcion-fca">
            {!! nl2br(e($pagina->descripcion)) !!}
        </p>
    @endif
</div>
    @endif

    @if($pagina->contenido)
        <div class="mt-4 mb-5">
            {!! nl2br(e($pagina->contenido)) !!}
        </div>
    @endif

    @if($pagina->mision)
        <div class="mb-5">
            <h3 class="fw-bold mb-3" style="color:#0b2c55;">Misión</h3>
            <p>{!! nl2br(e($pagina->mision)) !!}</p>
        </div>
    @endif

    @if($pagina->vision)
        <div class="mb-5">
            <h3 class="fw-bold mb-3" style="color:#0b2c55;">Visión</h3>
            <p>{!! nl2br(e($pagina->vision)) !!}</p>
        </div>
    @endif

    @if($pagina->contacto_titulo || $pagina->contacto_correo || $pagina->contacto_texto || $pagina->redes_texto)
        <div class="mb-5 text-center">
            @if($pagina->contacto_titulo)
                <h3 class="fw-bold mb-3" style="color:#0b2c55;">{{ $pagina->contacto_titulo }}</h3>
            @endif

            @if($pagina->contacto_correo)
                <p class="mb-2">
                    <a href="mailto:{{ $pagina->contacto_correo }}" class="fw-semibold">
                        {{ $pagina->contacto_correo }}
                    </a>
                </p>
            @endif

            @if($pagina->contacto_texto)
                <p class="mb-2">{{ $pagina->contacto_texto }}</p>
            @endif

            @if($pagina->redes_texto)
                <p class="mb-0">{{ $pagina->redes_texto }}</p>
            @endif
        </div>
    @endif
</div>

@endsection