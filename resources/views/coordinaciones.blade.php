@extends('layouts.interno')

@section('title', 'Coordinaciones')

@section('content')

<section class="coordinaciones-page py-5">

    <div class="container-lg">

        {{-- ENCABEZADO --}}
        @if($seccion)
            <div class="text-center mb-5 encabezado-coordinaciones">
                <h1 class="fw-bold text-fca mb-3">
                    Información de Coordinaciones
                </h1>

                <p class="text-muted fs-5">
                    {{ $seccion->contenido }}
                </p>
            </div>
        @endif

        {{-- MODULOS --}}
        @foreach($modulos as $modulo)

            <section class="mb-5">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden modulo-card">

                    {{-- IMAGEN --}}
                    @if($modulo->imagen)
                        <img src="{{ asset('img/'.$modulo->imagen) }}"
                             class="modulo-img"
                             alt="{{ $modulo->titulo }}">
                    @endif

                    {{-- CONTENIDO --}}
                    <div class="card-body p-4 p-lg-5">

                        <h2 class="fw-bold text-fca mb-4 text-center">
                            {{ $modulo->titulo }}
                        </h2>

                        @if($modulo->descripcion)
                            <div class="descripcion-modulo mb-4">
                                <p>
                                    {!! nl2br(e($modulo->descripcion)) !!}
                                </p>
                            </div>
                        @endif

                        {{-- SUBAPARTADOS --}}
                        @foreach($modulo->subapartados as $subapartado)

                            <div class="subapartado-card mb-4">

                                <h4 class="fw-bold text-fca mb-3">
                                    {{ $subapartado->titulo }}
                                </h4>

                                @if($subapartado->contenido)
                                    <p class="text-muted mb-3">
                                        {!! nl2br(e($subapartado->contenido)) !!}
                                    </p>
                                @endif

                                @if($subapartado->items->count())

                                    <div class="row g-3">

                                        @foreach($subapartado->items as $item)

                                            <div class="col-md-12">

                                                <div class="item-card h-100">

                                                    <div class="d-flex align-items-start gap-3">

                                                        <div class="icon-box">
                                                            <i class="bi bi-bookmark-check-fill"></i>
                                                        </div>

                                                        <div>

                                                            @if($item->url)
                                                                <a href="{{ $item->url }}"
                                                                   target="_blank"
                                                                   class="item-link fw-semibold">
                                                                    {{ $item->titulo }}
                                                                </a>
                                                            @else
                                                                <p class="fw-semibold mb-1">
                                                                    {{ $item->titulo }}
                                                                </p>
                                                            @endif

                                                            @if($item->contenido)
                                                                <small class="text-muted">
                                                                    {{ $item->contenido }}
                                                                </small>
                                                            @endif

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        @endforeach

                                    </div>

                                @endif

                            </div>

                        @endforeach

                        {{-- ENLACES --}}
                        @php
                            $grupos = $modulo->enlaces->groupBy('grupo');
                        @endphp

                        @foreach($grupos as $grupo => $enlaces)

                            <div class="enlaces-box text-center mt-4">

                                @if($grupo)
                                    <h5 class="fw-bold text-white mb-4">
                                        {{ $grupo }}
                                    </h5>
                                @endif

                                <div class="d-flex flex-wrap justify-content-center gap-3">

                                    @foreach($enlaces as $enlace)

                                        <a href="{{ $enlace->url }}"
                                           target="_blank"
                                           class="btn btn-fca-yellow rounded-pill px-4">

                                            {{ $enlace->titulo }}

                                        </a>

                                    @endforeach

                                </div>

                            </div>

                        @endforeach

                        {{-- CONTACTOS --}}
                        @if($modulo->contactos->count())

                            <div class="mt-5">

                                <h3 class="fw-bold text-center text-fca mb-4">
                                    Contacto
                                </h3>

                                <div class="row justify-content-center g-4">

                                    @foreach($modulo->contactos as $contacto)

                                        <div class="col-md-12">

                                            <div class="contacto-card h-100">

                                                <div class="d-flex align-items-center gap-4">

                                                    @if($contacto->foto)

                                                        <img src="{{ asset('img/'.$contacto->foto) }}"
                                                             alt="{{ $contacto->nombre }}"
                                                             class="contacto-foto">

                                                    @else

                                                        <div class="contacto-icon">
                                                            <i class="bi bi-person-fill"></i>
                                                        </div>

                                                    @endif

                                                    <div>

                                                        <h5 class="fw-bold mb-1">
                                                            {{ $contacto->nombre }}
                                                        </h5>

                                                        @if($contacto->puesto)
                                                            <p class="text-muted mb-1">
                                                                {{ $contacto->puesto }}
                                                            </p>
                                                        @endif

                                                        @if($contacto->telefono)
                                                            <p class="mb-1">
                                                                <i class="bi bi-telephone-fill text-warning"></i>
                                                                {{ $contacto->telefono }}
                                                            </p>
                                                        @endif

                                                        @if($contacto->correo)
                                                            <p class="mb-0">
                                                                <a href="mailto:{{ $contacto->correo }}"
                                                                   class="correo-link">
                                                                    {{ $contacto->correo }}
                                                                </a>
                                                            </p>
                                                        @endif

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    @endforeach

                                </div>

                            </div>

                        @endif

                    </div>

                </div>

            </section>

        @endforeach

    </div>

</section>

@endsection
