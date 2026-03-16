@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <!-- MENU LATERAL -->
        <div class="col-3">

            <div class="list-group">

                <a href="#" class="list-group-item list-group-item-action">
                    Acerca de Nosotros
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Historia
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Organización
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Plan de Desarrollo
                </a>
            </div>
        </div>
        <!-- CONTENIDO -->
        <div class="col-9">
            @yield('contenido_menu')
        </div>
    </div>
</div>

@endsection