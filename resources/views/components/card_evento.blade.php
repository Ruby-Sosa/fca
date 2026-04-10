@php
    $timestamp = strtotime($fecha);
    $dia = $timestamp ? date('d', $timestamp) : '';
    $mes = $timestamp ? strtoupper(date('M', $timestamp)) : '';
@endphp

<div class="col-12 mb-3">
    <div class="card border-0 shadow-sm overflow-hidden agenda-card">
        <div class="row g-0 align-items-center">

            {{-- Imagen --}}
            <div class="col-md-4 col-lg-3">
                <div class="agenda-img-wrap">
                    <img src="{{ asset('img/'.$imagen) }}"
                         class="img-fluid w-100 agenda-img"
                         alt="{{ $titulo }}">
                </div>
            </div>

            {{-- Contenido --}}
            <div class="col-md-8 col-lg-9">
                <div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3 h-100">

                    {{-- Fecha destacada --}}
                    <div class="agenda-fecha text-center">
                        <div class="agenda-dia">{{ $dia }}</div>
                        <div class="agenda-mes">{{ $mes }}</div>
                    </div>

                    {{-- Información --}}
                    <div class="flex-grow-1">
                        <span class="badge rounded-pill text-bg-primary mb-2">Evento</span>

                        <h5 class="fw-bold mb-2">{{ $titulo }}</h5>

                        <p class="mb-1 text-muted small">
                            <strong>Fecha:</strong> {{ $fecha }}
                        </p>

                        <p class="mb-0 text-muted small">
                            <strong>Hora:</strong> {{ $hora }}
                        </p>
                    </div>

                    {{-- Botón --}}
                    <div class="text-md-end">
                        <a href="{{ $enlace ?? '#' }}"
                           class="btn btn-primary btn-sm rounded-pill px-4">
                            Ver detalles
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>