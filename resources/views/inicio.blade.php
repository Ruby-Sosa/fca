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

            @include('components.card_noticia',[
                'titulo'=>$apartado->titulo,
                'imagen'=>$apartado->imagen,
                'fecha'=>\Carbon\Carbon::parse($apartado->fecha)
                        ->format('d \d\e F \d\e Y'),
                'descripcion'=>$apartado->descripcion,
                'enlace'=>$apartado->enlace
            ])

        @endforeach
    </div>
</div>

{{-- Apartados /Agenda Digital Universitaria (Eventos)--}}
<div class="container my-5">

    <h3 class="mb-4">
        Agenda Digital Universitaria (Eventos)
    </h3>

    <div class="row g-4">

        @foreach($eventos as $evento)

            @include('components.card_evento',[
                'titulo'=>$evento->titulo,
                'imagen'=>$evento->imagen,
                'fecha'=>\Carbon\Carbon::parse($evento->fecha)
                        ->format('d \d\e F \d\e Y'),
                'hora'=>$evento->hora,
                'enlace'=>$evento->enlace
            ])

        @endforeach

    </div>

</div>
@endsection