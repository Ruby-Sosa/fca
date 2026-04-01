@extends('layouts.interno')

@section('title', 'Aspirantes')

@section('content')

@if($seccion)
    <section class="mb-5 text-center">
        <h1>{{ $seccion->titulo }}</h1>
        <p>{{ $seccion->contenido }}</p>
    </section>
@endif

@foreach($apartados as $apartado)
    <section class="mb-5">
        <h2>{{ $apartado->titulo }}</h2>

        @if($apartado->imagen)
            <img src="{{ asset('img/'.$apartado->imagen) }}" class="img-fluid mb-3" alt="{{ $apartado->titulo }}">
        @endif

        @if($apartado->contenido)
            <p>{!! nl2br(e($apartado->contenido)) !!}</p>
        @endif

        @if($apartado->enlace)
            <a href="{{ $apartado->enlace }}" target="_blank" class="btn btn-primary">
                Ir al enlace
            </a>
        @endif
    </section>
@endforeach

@endsection