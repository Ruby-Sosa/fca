@extends('layouts.interno')

@section('title', $pagina->titulo)

@section('content')

<div class="text-center mb-4">
    <h1 class="titulo-fca">{{ $pagina->titulo }}</h1>
</div>

@if($pagina->imagen_banner)
    <div class="mb-4 text-center">
        <img src="{{ asset('img/'.$pagina->imagen_banner) }}" class="img-fluid w-100 rounded" alt="{{ $pagina->titulo }}">
    </div>
@endif

<div class="container">

    @php
        $bienvenida = $pagina->secciones->where('tipo', 'bienvenida')->first();
        $nosotros = $pagina->secciones->where('tipo', 'nosotros')->first();
        $mision = $pagina->secciones->where('tipo', 'mision')->first();
        $vision = $pagina->secciones->where('tipo', 'vision')->first();
        $conoce = $pagina->secciones->where('tipo', 'conoce')->first();
    @endphp

    @if($bienvenida)
        <section class="mb-5">
            <h3 class="fw-bold mb-3" style="color:#0b2c55;">{{ $bienvenida->titulo }}</h3>

            @if($bienvenida->cita)
                <blockquote class="text-center fst-italic fw-semibold my-4">
                    “{{ $bienvenida->cita }}”
                </blockquote>
            @endif

            @if($bienvenida->autor_cita)
                <p class="text-center mb-4">{{ $bienvenida->autor_cita }}</p>
            @endif

            <p>{!! nl2br(e($bienvenida->contenido)) !!}</p>

            <div class="text-center my-4">
                <p class="fw-semibold">¡Únete a nosotros en esta emocionante travesía educativa!</p>
            </div>

            <hr style="border: 3px solid #0b2c55; width:70%; margin:auto;">
        </section>
    @endif

    @if($nosotros)
        <section class="my-5">
            <h3 class="fw-bold mb-3" style="color:#0b2c55;">{{ $nosotros->titulo }}</h3>

            @if($nosotros->subtitulo)
                <p class="fw-bold">{{ $nosotros->subtitulo }}</p>
            @endif

            <p>{!! nl2br(e($nosotros->contenido)) !!}</p>
        </section>
    @endif

    @if($mision)
        <section class="my-5">
            <div class="row align-items-center g-4">
                <div class="col-md-2 text-center">
                    @if($mision->imagen)
                        <img src="{{ asset('img/'.$mision->imagen) }}" class="img-fluid" alt="{{ $mision->titulo }}">
                    @endif
                </div>
                <div class="col-md-10">
                    <h4 class="fw-bold mb-3" style="color:#0b2c55;">{{ $mision->titulo }}</h4>
                    <p>{!! nl2br(e($mision->contenido)) !!}</p>
                </div>
            </div>
        </section>
    @endif

    @if($vision)
        <section class="my-5">
            <div class="row align-items-center g-4">
                <div class="col-md-2 text-center">
                    @if($vision->imagen)
                        <img src="{{ asset('img/'.$vision->imagen) }}" class="img-fluid" alt="{{ $vision->titulo }}">
                    @endif
                </div>
                <div class="col-md-10">
                    <h4 class="fw-bold mb-3" style="color:#0b2c55;">{{ $vision->titulo }}</h4>
                    <p>{!! nl2br(e($vision->contenido)) !!}</p>
                </div>
            </div>
        </section>
    @endif

    <div class="text-center my-4">
        <p>¡Estamos aquí para ayudarte y apoyarte en tu desarrollo profesional!</p>
    </div>

    <hr style="border: 3px solid #c69214; width:70%; margin:auto;">

    @if($conoce)
        <section class="my-5">
            <h3 class="fw-bold mb-3" style="color:#0b2c55;">{{ $conoce->titulo }}</h3>
            <p>{!! nl2br(e($conoce->contenido)) !!}</p>
        </section>
    @endif

    @if($pagina->accesos->count())
        <section class="my-5">
            <div class="row g-4 justify-content-center">
                @foreach($pagina->accesos as $acceso)
                    <div class="col-md-4 text-center">
                        @if($acceso->icono)
                            <img src="{{ asset('img/'.$acceso->icono) }}" class="img-fluid mb-3" style="max-height:180px;" alt="{{ $acceso->titulo }}">
                        @endif

                        <a href="{{ $acceso->url }}" class="btn btn-lg px-4 py-3 fw-bold text-uppercase"
                           style="background:#c69214; color:#0b2c55; border-radius:18px; min-width:260px;">
                            {{ $acceso->texto_boton }}
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <hr style="border: 3px solid #c69214; width:70%; margin:auto;">

    @if($pagina->contactos->count())
        <section class="my-5 text-center">
            <h3 class="fw-bold mb-4" style="color:#0b2c55;">Contacto</h3>

            @foreach($pagina->contactos as $contacto)
                @if($contacto->correo)
                    <p class="mb-1">
                        <a href="mailto:{{ $contacto->correo }}">{{ $contacto->correo }}</a>
                    </p>
                @endif
            @endforeach

            @foreach($pagina->contactos as $contacto)
                @if($contacto->horario)
                    <p class="mb-1">{{ $contacto->horario }}</p>
                @endif
                @if($contacto->ubicacion)
                    <p class="mb-1">{{ $contacto->ubicacion }}</p>
                @endif
            @endforeach
        </section>
    @endif

</div>

@endsection