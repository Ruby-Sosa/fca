<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=10">
</head>

<body>

    {{-- HEADER --}}
    <x-header />

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