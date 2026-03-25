@extends('layouts.interno')

@section('title','Aspirantes')

@section('content')
    <h2>{{ $seccion->titulo }}</h2>
    <p>{{ $seccion->contenido }}</p>
@endsection