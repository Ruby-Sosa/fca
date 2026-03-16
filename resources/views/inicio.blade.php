@extends('layouts.app')

@section('title','Inicio')

@section('content')

{{-- Banner principal --}}
@if($banner)
<div class="container-fluid p-0 mb-5">
    <img src="{{ asset('img/'.$banner->imagen) }}" 
         class="img-fluid w-100"
         style="height:420px; object-fit:cover;"
         alt="{{ $banner->titulo }}">
</div>
@endif

{{-- Bienvenida --}}
<div class="container text-center my-5">
    <h2>{{ $seccion->titulo }}</h2>

    <p class="lead">
        {{ $seccion->contenido }}
    </p>
</div>

{{-- Apartados / Noticias --}}
<div class="container my-5">
    <h3 class="mb-4">Noticias</h3>

    <div class="row g-4">
        @foreach($apartados as $apartado)
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm" style="background-color:#3d5876; color:white;">
                    
                    <div class="card-header border-0 fw-bold" style="background-color:#3d5876; min-height:90px; font-size:14px;">
                        {{ $apartado->titulo }}
                    </div>

                    <img src="{{ asset('img/'.$apartado->imagen) }}" 
                         class="card-img-top"
                         style="height:220px; object-fit:cover;"
                         alt="{{ $apartado->titulo }}">

                    <div class="card-body">
                        <p class="mb-2">
                            <strong>Fecha:</strong>
                            {{ \Carbon\Carbon::parse($apartado->fecha)->format('d \d\e F \d\e Y') }}
                        </p>

                        <p>{{ $apartado->descripcion }}</p>
                    </div>

                    <div class="card-footer border-0 text-end" style="background-color:#3d5876;">
                        <a href="{{ $apartado->enlace ?? '#' }}" class="text-white fw-bold text-decoration-none">
                            Ver más...
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
{{-- Apartados /Agenda Digital Universitaria (Eventos)--}}
<div class="container my-5">
    <h3 class="mb-4">Agenda Digital Universitaria (Eventos)</h3>

    <div class="row g-4">
        @foreach($eventos as $evento)
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm" style="background-color:#3d5876; color:white;">

                    <div class="card-header border-0 fw-bold" style="background-color:#3d5876; min-height:90px; font-size:14px;">
                        {{ $evento->titulo }}
                    </div>

                    <img src="{{ asset('img/'.$evento->imagen) }}"
                         class="card-img-top"
                         style="height:220px; object-fit:cover;"
                         alt="{{ $evento->titulo }}">

                    <div class="card-body">
                        <p class="mb-2">
                            <strong>Fecha:</strong>
                            {{ \Carbon\Carbon::parse($evento->fecha)->format('d \d\e F \d\e Y') }}
                        </p>

                        <p class="mb-0">
                            <strong>Hora:</strong> {{ $evento->hora }}
                        </p>
                    </div>

                    <div class="card-footer border-0 text-end" style="background-color:#3d5876;">
                        <a href="{{ $evento->enlace ?? '#' }}" class="text-white fw-bold text-decoration-none">
                            Ver más...
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection