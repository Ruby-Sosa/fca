<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- ESTILOS -->
    
</head>

<body>

    {{-- HEADER --}}
    <header class="site-header">
        <div class="container py-3">
            <div class="row align-items-center">

                <!-- LOGO -->
                <div class="col-md-2 col-12 text-center text-md-start mb-3 mb-md-0 logo-box">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo FCA" class="img-fluid">
                </div>

                <!-- TEXTO -->
                <div class="col-md-10 col-12">
                    <div class="brand-block text-center text-md-start">
                        <div class="brand-title">
                            Facultad de Contaduría y Administración
                        </div>
                        <p class="brand-subtitle">
                            “Luz, Ciencia y Verdad”
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </header>

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- SUBMENÚ --}}
    @include('components.subnavbar')

    {{-- CONTENIDO --}}
    <main class="page-content">
    <div class="container my-5">
        @yield('content')
    </div>
</main>
    {{-- FOOTER --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>