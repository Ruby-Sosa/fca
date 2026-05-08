@extends('layouts.interno')

@section('title', $pagina->titulo)

@section('content')

<section class="pagina-fca py-5">
    <div class="container-lg">

        <div class="text-center mb-5">
            <h1 class="titulo-fca fw-bold">{{ $pagina->titulo }}</h1>
            <div class="titulo-linea mx-auto"></div>
        </div>

        @if($pagina->imagen)
            <div class="hero-fca mb-5">
                <img src="{{ asset('img/'.$pagina->imagen) }}"
                     alt="{{ $pagina->titulo }}">
            </div>
        @endif

        <div class="contenido-wrapper">

            @if($pagina->descripcion)
                <div class="card border-0 shadow-sm rounded-4 mb-4 contenido-card">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-fca mb-3">
                            La Facultad de Contaduría y Administración de la UADY
                        </h3>

                        <p class="descripcion-fca mb-0">
                            {!! nl2br(e($pagina->descripcion)) !!}
                        </p>
                    </div>
                </div>
            @endif

            @if($pagina->contenido)
                <div class="card border-0 shadow-sm rounded-4 mb-4 contenido-card">
                    <div class="card-body p-5 texto-contenido">
                        {!! nl2br(e($pagina->contenido)) !!}
                    </div>
                </div>
            @endif

            <div class="row g-4">
                @if($pagina->mision)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 info-card-fca">
                            <div class="card-body p-4">
                                <div class="icono-fca mb-3">
                                    <i class="bi bi-bullseye"></i>
                                </div>

                                <h3 class="fw-bold text-fca mb-3">Misión</h3>

                                <p class="mb-0">
                                    {!! nl2br(e($pagina->mision)) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($pagina->vision)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 info-card-fca">
                            <div class="card-body p-4">
                                <div class="icono-fca mb-3">
                                    <i class="bi bi-eye-fill"></i>
                                </div>

                                <h3 class="fw-bold text-fca mb-3">Visión</h3>

                                <p class="mb-0">
                                    {!! nl2br(e($pagina->vision)) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            @if($pagina->contacto_titulo || $pagina->contacto_correo || $pagina->contacto_texto || $pagina->redes_texto)
                <div class="contacto-fca-card rounded-4 shadow-sm p-5 text-center mt-5">

                    <div class="icono-contacto mb-3">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    @if($pagina->contacto_titulo)
                        <h3 class="fw-bold text-fca mb-3">
                            {{ $pagina->contacto_titulo }}
                        </h3>
                    @endif

                    @if($pagina->contacto_correo)
                        <p class="mb-2">
                            <a href="mailto:{{ $pagina->contacto_correo }}" class="correo-fca">
                                {{ $pagina->contacto_correo }}
                            </a>
                        </p>
                    @endif

                    @if($pagina->contacto_texto)
                        <p class="mb-2 text-muted">{{ $pagina->contacto_texto }}</p>
                    @endif

                    @if($pagina->redes_texto)
                        <p class="mb-0 text-muted">{{ $pagina->redes_texto }}</p>
                    @endif

                </div>
            @endif

        </div>

    </div>
</section>

@endsection