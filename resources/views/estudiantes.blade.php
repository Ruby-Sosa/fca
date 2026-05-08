@extends('layouts.interno')

@section('title', 'Estudiantes')

@section('content')

<section class="estudiantes-page py-5">
    <div class="container-lg">

        @if($seccion)
            <div class="text-center mb-5">
                <h1 class="fw-bold text-fca display-5">
                    Información para Estudiantes
                </h1>
                <p class="text-muted fs-5 encabezado-texto">
                    {{ $seccion->contenido }}
                </p>
            </div>
        @endif

        @foreach($modulos as $modulo)
            <section class="mb-5">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden modulo-card mb-5">

                    @if($modulo->imagen)
                        <img src="{{ asset('img/'.$modulo->imagen) }}"
                             class="modulo-img"
                             alt="{{ $modulo->titulo }}">
                    @endif

                    <div class="card-body p-5 text-center">
                        <h2 class="fw-bold text-fca mb-3">
                            {{ $modulo->titulo }}
                        </h2>

                        @if($modulo->descripcion)
                            <p class="text-muted modulo-texto">
                                {!! nl2br(e($modulo->descripcion)) !!}
                            </p>
                        @endif
                    </div>

                </div>

                @foreach($modulo->subapartados as $subapartado)
                    <div class="info-card rounded-4 shadow-sm p-4 mb-4">

                        <h4 class="fw-bold text-fca mb-3">
                            {{ $subapartado->titulo }}
                        </h4>

                        @if($subapartado->contenido)
                            <p class="text-muted">
                                {!! nl2br(e($subapartado->contenido)) !!}
                            </p>
                        @endif

                        @if($subapartado->items->count())
                            <div class="row g-3 mt-2">
                                @foreach($subapartado->items as $item)
                                    <div class="col-md-6">
                                        <div class="item-card p-3 rounded-3 h-100">

                                            @if($item->url)
                                                <a href="{{ $item->url }}"
                                                   target="_blank"
                                                   class="fw-bold item-link">
                                                    {{ $item->titulo }}
                                                </a>
                                            @else
                                                <strong>{{ $item->titulo }}</strong>
                                            @endif

                                            @if($item->contenido)
                                                <p class="mb-0 mt-2 text-muted small">
                                                    {{ $item->contenido }}
                                                </p>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                @endforeach

                @php
                    $grupos = $modulo->enlaces->groupBy('grupo');
                @endphp

                @foreach($grupos as $grupo => $enlaces)
                    <div class="enlaces-box rounded-4 p-4 text-center mb-4">

                        @if($grupo)
                            <h5 class="fw-bold mb-3">
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

                @if($modulo->contactos->count())
                    <div class="mt-5">
                        <h3 class="fw-bold text-fca text-center mb-4">
                            Contacto
                        </h3>

                        <div class="row g-4 justify-content-center">
                            @foreach($modulo->contactos as $contacto)
                                <div class="col-md-6">
                                    <div class="contacto-estudiante-card h-100 rounded-4 shadow-sm p-4">

                                        <div class="d-flex align-items-center gap-3">

                                            @if($contacto->foto)
                                                <img src="{{ asset('img/'.$contacto->foto) }}"
                                                     alt="{{ $contacto->nombre }}"
                                                     class="contacto-foto">
                                            @else
                                                <div class="contacto-icono">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            @endif

                                            <div>
                                                <h5 class="fw-bold text-fca mb-1">
                                                    {{ $contacto->nombre }}
                                                </h5>

                                                @if($contacto->puesto)
                                                    <p class="mb-1 text-muted">
                                                        {{ $contacto->puesto }}
                                                    </p>
                                                @endif

                                                @if($contacto->telefono)
                                                    <p class="mb-1 small">
                                                        <i class="bi bi-telephone-fill text-dorado"></i>
                                                        {{ $contacto->telefono }}
                                                    </p>
                                                @endif

                                                @if($contacto->correo)
                                                    <p class="mb-0 small">
                                                        <i class="bi bi-envelope-fill text-dorado"></i>
                                                        <a href="mailto:{{ $contacto->correo }}" class="item-link">
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

            </section>
        @endforeach

    </div>
</section>

@endsection