@extends('layouts.interno')

@section('title', 'Aspirantes')

@section('content')

<section class="aspirantes-page py-5">

    <div class="container-lg">

        {{-- ENCABEZADO --}}
        @if($seccion)
            <div class="text-center mb-5">
                <h1 class="fw-bold text-fca display-5">
                    {{ $seccion->titulo }}
                </h1>

                <p class="text-muted fs-5 encabezado-texto">
                    {{ $seccion->contenido }}
                </p>
            </div>
        @endif

        {{-- DESTACADO --}}
        @foreach($apartados as $apartado)

            @if($apartado->titulo == '¿Por qué estudiar en FCA?')

                <div class="row justify-content-center mb-5">

                    <div class="col-12">

                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden destacado-card">

                            @if($apartado->imagen)
                                <img src="{{ asset('img/'.$apartado->imagen) }}"
                                     class="destacado-img"
                                     alt="{{ $apartado->titulo }}">
                            @endif

                            <div class="card-body p-5 text-center">

                                <h2 class="fw-bold text-fca mb-4">
                                    {{ $apartado->titulo }}
                                </h2>

                                <p class="destacado-texto text-muted">
                                    {!! nl2br(e($apartado->contenido)) !!}
                                </p>

                                @if($apartado->enlace)
                                    <a href="{{ $apartado->enlace }}"
                                       target="_blank"
                                       class="btn btn-fca-yellow rounded-pill px-5 py-2 mt-4">
                                        Ver más
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @endif

        @endforeach

        {{-- TARJETAS --}}
        <div class="row g-4 justify-content-center">

            @foreach($apartados as $apartado)

                @if($apartado->titulo != '¿Por qué estudiar en FCA?' 
                    && $apartado->tipo != 'contacto')

                    <div class="col-md-6">

                        <div class="card h-100 border-0 shadow-sm rounded-4 apartado-card">

                            @if($apartado->imagen)
                                <img src="{{ asset('img/'.$apartado->imagen) }}"
                                     class="card-img-top apartado-img"
                                     alt="{{ $apartado->titulo }}">
                            @endif

                            <div class="card-body d-flex flex-column p-4">

                                <h4 class="fw-bold text-fca mb-3">
                                    {{ $apartado->titulo }}
                                </h4>

                                <p class="text-muted flex-grow-1">
                                    {!! nl2br(e($apartado->contenido)) !!}
                                </p>

                                @if($apartado->enlace)
                        <div class="text-center mt-4">
                            <a href="{{ $apartado->enlace }}"
                            target="_blank"
                            class="btn btn-fca-yellow px-4 py-2 rounded-pill">
                                Ir al enlace
                            </a>
                        </div>
                                @endif

                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

{{-- CONTACTOS --}}
<div class="row g-4 justify-content-center mt-1">

    @foreach($apartados as $apartado)

        @if($apartado->tipo == 'contacto')

            <div class="col-md-6">

                <div class="card h-100 border-0 shadow-sm rounded-4 contacto-card">

                    <div class="card-body d-flex flex-column p-4 text-center">

                        <div class="contact-icon mb-3">
                            <i class="bi bi-envelope-fill"></i>
                        </div>

                        <h4 class="fw-bold text-fca mb-3">
                            {{ $apartado->titulo }}
                        </h4>

                        <p class="contacto-texto flex-grow-1">
                            {!! nl2br(e($apartado->contenido)) !!}
                        </p>

                    </div>

                </div>

            </div>

        @endif

    @endforeach

</div>

</section>

@endsection

