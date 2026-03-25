<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f4f6f9;
            font-family: Arial, sans-serif;
            color:#1f2937;
        }

        .site-header{
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-bottom: 1px solid #dbe3ea;
            box-shadow: 0 2px 10px rgba(0,0,0,.05);
        }

        .logo-box img{
            max-height: 95px;
            object-fit: contain;
        }

        .brand-block{
            display:flex;
            flex-direction:column;
            justify-content:center;
            height:100%;
        }

        .brand-title{
            font-size: 1.9rem;
            font-weight: 700;
            color:#0b2c55;
            margin-bottom: .2rem;
        }

        .brand-subtitle{
            font-size: .95rem;
            color:#6b7280;
            margin:0;
        }

        .main-nav{
            background: linear-gradient(90deg, #c69214 0%, #d7a62e 100%);
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.08);
        }

        .main-nav a{
            color:#17202a;
            font-weight:700;
            text-decoration:none;
            padding:16px 18px;
            transition:.25s ease;
            border-radius:10px;
        }

        .main-nav a:hover{
            background-color: rgba(255,255,255,.28);
            color:#0b2c55;
        }

        .sub-nav{
            background: #0b2c55;
            box-shadow: 0 4px 14px rgba(11,44,85,.18);
        }

        .menu-hover{
            position: relative;
        }

        .menu-hover:hover .dropdown-menu{
            display:block;
        }

        .sub-nav .dropdown > a{
            color:white;
            text-decoration:none;
            font-size:.95rem;
            font-weight:600;
            padding:14px 12px;
            display:inline-block;
            transition:.2s ease;
        }

        .sub-nav .dropdown > a:hover{
            color:#f6c453;
        }

        .dropdown-menu{
            margin-top:0;
            border:none;
            border-radius:14px;
            box-shadow:0 10px 24px rgba(0,0,0,.12);
            padding:10px 0;
        }

        .dropdown-item{
            font-size:.92rem;
            padding:10px 16px;
        }

        .dropdown-item:hover{
            background:#f3f6fb;
            color:#0b2c55;
        }

        .page-content{
            min-height: 60vh;
        }

        @media (max-width: 991px){
            .brand-title{
                font-size:1.35rem;
            }

            .brand-subtitle{
                font-size:.85rem;
            }

            .main-nav,
            .sub-nav{
                overflow-x:auto;
                white-space:nowrap;
            }
        }
    </style>
</head>
<body>

    {{-- HEADER --}}
    <header class="site-header">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-md-2 col-12 text-center text-md-start mb-3 mb-md-0 logo-box">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo FCA" class="img-fluid">
                </div>

                <div class="col-md-10 col-12">
                    <div class="brand-block text-center text-md-start">
                        <div class="brand-title">Facultad de Contaduría y Administración</div>
                        <p class="brand-subtitle">“Luz, Ciencia y Verdad”</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- MENÚ PRINCIPAL --}}
    <nav class="main-nav">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center flex-wrap py-2 gap-2">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('aspirantes') }}">Aspirantes</a>
            <a href="{{ route('estudiantes') }}">Estudiantes</a>
            <a href="{{ route('docentes') }}">Docentes</a>
            <a href="{{ route('egresados') }}">Egresados</a>
        </div>
    </nav>

    {{-- SUBMENÚ --}}
    <div class="sub-nav">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center flex-wrap text-center">
            
            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">Nuestra Facultad</a>
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

            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">Oferta Educativa</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Oferta de Educación Continua</a></li>
                    <li><a class="dropdown-item" href="#">Programas de Licenciatura</a></li>
                    <li><a class="dropdown-item" href="#">Programas de Posgrado</a></li>
                </ul>
            </div>

            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">Investigación</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Coordinación de Investigación</a></li>
                    <li><a class="dropdown-item" href="#">Cuerpos Académicos</a></li>
                    <li><a class="dropdown-item" href="#">Indicadores Económicos</a></li>
                    <li><a class="dropdown-item" href="#">Publicaciones Científicas</a></li>
                </ul>
            </div>

            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">Vinculación</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Centro de Desarrollo de Negocios</a></li>
                    <li><a class="dropdown-item" href="#">Coordinación de Vinculación Estratégica</a></li>
                    <li><a class="dropdown-item" href="#">Módulo de Atención Fiscal</a></li>
                    <li><a class="dropdown-item" href="#">Programa Padrino Académico</a></li>
                </ul>
            </div>

            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">Internacionalización</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">International Entrepreneurship</a></li>
                    <li><a class="dropdown-item" href="#">Lab Smart Money</a></li>
                    <li><a class="dropdown-item" href="#">Movilidad Internacional</a></li>
                </ul>
            </div>

        </div>
    </div>

    {{-- CONTENIDO --}}
    <main class="page-content">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>