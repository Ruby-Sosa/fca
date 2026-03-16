<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>

.menu-hover:hover .dropdown-menu {
    display: block;
}

.dropdown-menu {
    margin-top: 0;
}

</style>

</head>
<body>

<div class="container-fluid">

<div class="row">

    <!-- LOGO IZQUIERDA -->
    <div class="col-2 bg-light d-flex align-items-center justify-content-center">

    <img src="{{ asset('img/logo.png') }}"
         style="height:125px; object-fit:contain;">

</div>

    <!-- LADO DERECHO -->
    <div class="col-10 p-0">

            <!-- BARRA BLANCA -->
           <div class="bg-light p-2">
                <h5 class="mb-0">"Luz, Ciencia y Verdad"</h5>
            </div>


            <!-- BARRA AMARILLA -->
        <nav style="background-color:#c69214;" 
            class="d-flex justify-content-around align-items-center py-3 flex-grow-1">
            <a class="text-dark fw-bold" href="/">Inicio</a>
            <a class="text-dark fw-bold" href="/aspirantes">Aspirantes</a>
            <a class="text-dark fw-bold" href="/estudiantes">Estudiantes</a>
            <a class="text-dark fw-bold" href="/docentes">Docentes</a>
            <a class="text-dark fw-bold" href="/egresados">Egresados</a>

        </nav>


            <!-- BARRA AZUL -->
            <div style="background-color:#0b2c55;"
            class="d-flex justify-content-around align-items-center py-2 text-white flex-grow-1">
    <!-- NUESTRA FACULTAD -->
    <div class="dropdown menu-hover">

        <a class="text-white dropdown-toggle">
            Nuestra Facultad
        </a>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">Acerca de Nosotros</a></li>
            <li><a class="dropdown-item" href="#">Centro de Innovación Pedagógica</a></li>
            <li><a class="dropdown-item" href="#">Directorio</a></li>
            <li><a class="dropdown-item" href="#">Historia</a></li>
            <li><a class="dropdown-item" href="#">Matrícula</a></li>
            <li><a class="dropdown-item" href="#">Organización</a></li>
            <li><a class="dropdown-item" href="#">Plan de Desarrollo</a></li>

        </ul>

    </div>


    <!-- OFERTA -->
    <div class="dropdown menu-hover">

        <a class="text-white dropdown-toggle">
            Oferta Educativa
        </a>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">Oferta de Educación Continua</a></li>
            <li><a class="dropdown-item" href="#">Programas de Licenciatura</a></li>
            <li><a class="dropdown-item" href="#">Programas de Posgrado</a></li>

        </ul>

    </div>


    <!-- INVESTIGACION -->
    <div class="dropdown menu-hover">

        <a class="text-white dropdown-toggle">
            Investigación
        </a>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">Coordinación de Investigación</a></li>
            <li><a class="dropdown-item" href="#">Cuerpos Académicos</a></li>
            <li><a class="dropdown-item" href="#">Indicadores Económicos</a></li>
            <li><a class="dropdown-item" href="#">Publicaciones Científicas</a></li>

        </ul>

    </div>


    <!-- VINCULACION -->
    <div class="dropdown menu-hover">

        <a class="text-white dropdown-toggle">
            Vinculación
        </a>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">Centro de Desarrollo de Negocios</a></li>
            <li><a class="dropdown-item" href="#">Coordinación de Vinculación Estratégica</a></li>
            <li><a class="dropdown-item" href="#">Módulo de Atención Fiscal</a></li>
            <li><a class="dropdown-item" href="#">Programa Padrino Académico</a></li>

        </ul>

    </div>


    <!-- INTERNACIONAL -->
    <div class="dropdown menu-hover">

        <a class="text-white dropdown-toggle">
            Internacionalización
        </a>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">International Entrepreneurship</a></li>
            <li><a class="dropdown-item" href="#">Lab Smart Money</a></li>
            <li><a class="dropdown-item" href="#">Movilidad Internacional</a></li>

        </ul>

    </div>
    </div>
</div>
<!-- ===== CONTENIDO ===== -->
<div class="container mt-3">
    @yield('content')
</div>
<!-- ===== FOOTER ===== -->
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>