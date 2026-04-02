@extends('layouts.interno')

@section('title', 'Docentes')

@section('content')

@if($seccion)
    <section class="mb-5 text-center">
        <h1 class="fw-bold" style="color:#0b2c55;">{{ $seccion->titulo }}</h1>
        <p class="text-secondary">{{ $seccion->contenido }}</p>
    </section>
@endif

@foreach($modulos as $modulo)
    <section class="mb-5">
        <h2 class="text-center fw-bold mb-3" style="color:#0b2c55;">
            {{ $modulo->titulo }}
        </h2>

        @if($modulo->imagen)
            <div class="mb-4">
                <img src="{{ asset('img/'.$modulo->imagen) }}"
                     class="img-fluid w-100 rounded shadow-sm"
                     style="max-height:500px; object-fit:cover;"
                     alt="{{ $modulo->titulo }}">
            </div>
        @endif

        @if($modulo->descripcion)
            <div class="mb-4">
                <p>{!! nl2br(e($modulo->descripcion)) !!}</p>
            </div>
        @endif

        @foreach($modulo->subapartados as $subapartado)
            <div class="mb-4">
                <h4 class="fw-semibold" style="color:#0b2c55;">{{ $subapartado->titulo }}</h4>

                @if($subapartado->contenido)
                    <p>{!! nl2br(e($subapartado->contenido)) !!}</p>
                @endif

                @if($subapartado->items->count())
                    <ul class="mb-0">
                        @foreach($subapartado->items as $item)
                            <li class="mb-2">
                                @if($item->url)
                                    <a href="{{ $item->url }}" target="_blank">{{ $item->titulo }}</a>
                                @else
                                    {{ $item->titulo }}
                                @endif

                                @if($item->contenido)
                                    <div>{{ $item->contenido }}</div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach

        @php
            $grupos = $modulo->enlaces->groupBy('grupo');
        @endphp

        @foreach($grupos as $grupo => $enlaces)
            <div class="mb-4 p-4 rounded text-center text-white" style="background-color:#0b2c55;">
                @if($grupo)
                    <h5 class="fw-bold mb-3">{{ $grupo }}</h5>
                @endif

                <div class="d-flex flex-wrap justify-content-center gap-3">
                    @foreach($enlaces as $enlace)
                        <a href="{{ $enlace->url }}" target="_blank" class="btn btn-light">
                            {{ $enlace->titulo }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

        @if($modulo->categoriasDirectorio->count())
            <div class="mt-5">
                @foreach($modulo->categoriasDirectorio as $categoria)
                    <div class="mb-5">
                        <h4 class="fw-bold" style="color:#0b2c55;">{{ $categoria->titulo }}</h4>

                        <div class="row">
                            <div class="col-md-4 fw-semibold">Apellido paterno</div>
                            <div class="col-md-4 fw-semibold">Apellido materno y nombres</div>
                            <div class="col-md-4 fw-semibold">Correo</div>
                        </div>

                        @foreach($categoria->docentes as $docente)
                            <div class="row py-1 border-bottom">
                                <div class="col-md-4">{{ $docente->apellido_paterno }}</div>
                                <div class="col-md-4">
                                    {{ $docente->apellido_materno }} {{ $docente->nombres }}
                                </div>
                                <div class="col-md-4">
                                    @if($docente->correo)
                                        <a href="mailto:{{ $docente->correo }}">{{ $docente->correo }}</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endif

        @if($modulo->contactos->count())
            <div class="mt-4">
                <h5 class="fw-bold" style="color:#0b2c55;">Contacto:</h5>

                <div class="row g-4">
                    @foreach($modulo->contactos as $contacto)
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                @if($contacto->foto)
                                    <img src="{{ asset('img/'.$contacto->foto) }}"
                                         alt="{{ $contacto->nombre }}"
                                         width="90"
                                         class="rounded shadow-sm">
                                @endif

                                <div>
                                    <p class="fw-bold mb-1">{{ $contacto->nombre }}</p>

                                    @if($contacto->puesto)
                                        <p class="mb-1">{{ $contacto->puesto }}</p>
                                    @endif

                                    @if($contacto->telefono)
                                        <p class="mb-1">{{ $contacto->telefono }}</p>
                                    @endif

                                    @if($contacto->correo)
                                        <p class="mb-0">
                                            <a href="mailto:{{ $contacto->correo }}">{{ $contacto->correo }}</a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endforeach

@endsection