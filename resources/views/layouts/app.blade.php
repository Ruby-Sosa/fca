<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .top-header{
            background: #ffffff;
            border-bottom: 1px solid #ddd;
        }

        .top-header img{
            max-height: 90px;
        }

        .lema{
            font-size: 2rem;
            font-weight: bold;
            color: #0b2c55;
        }

        .menu-principal{
            background-color: #c69214;
        }

        .menu-principal a{
            color: #111;
            font-weight: bold;
            text-decoration: none;
            padding: 18px 20px;
            display: inline-block;
        }

        .menu-principal a:hover{
            background-color: #b58310;
        }

        .submenu{
            background-color: #0b2c55;
        }

        .submenu a{
            color: white;
            text-decoration: none;
            padding: 14px 18px;
            display: inline-block;
        }

        .submenu a:hover{
            background-color: #123c70;
        }

        footer ul li{
            font-size: 13px;
            line-height: 1.7;
        }

        footer h5{
            font-size: 18px;
        }
        
    </style>
</head>

<body>

{{-- Encabezado --}}
<div class="container-fluid top-header py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center text-md-start">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Logo FCA">
            </div>
            <div class="col-md-9 text-center text-md-start">
                <div class="lema">"Luz, Ciencia y Verdad"</div>
            </div>
        </div>
    </div>
</div>

{{-- Menú principal --}}
<div class="container-fluid menu-principal text-center">
    <a href="{{ route('inicio') }}">Inicio</a>
    <a href="{{ route('aspirantes') }}">Aspirantes</a>
    <a href="{{ route('estudiantes') }}">Estudiantes</a>
    <a href="{{ route('docentes') }}">Docentes</a>
    <a href="{{ route('egresados') }}">Egresados</a>
</div>

{{-- Submenú --}}
<div class="container-fluid submenu text-center">
    <a href="#">Nuestra Facultad</a>
    <a href="#">Oferta Educativa</a>
    <a href="#">Investigación</a>
    <a href="#">Vinculación</a>
    <a href="#">Internacionalización</a>
</div>

{{-- Contenido de cada página --}}
@yield('content')

{{-- Footer componente --}}
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

