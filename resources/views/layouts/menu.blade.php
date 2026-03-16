@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <!-- MENU LATERAL -->
        <div class="col-3">

            @include('components.menu_lateral')

        </div>

        <!-- CONTENIDO -->
        <div class="col-9">

            @yield('contenido_menu')

        </div>

    </div>

</div>

@endsection