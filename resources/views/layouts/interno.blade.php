<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','FCA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ESTILOS -->
    <style>
        body{
            background-color:#f4f6f9;
            font-family: Arial, sans-serif;
            color:#1f2937;
        }

        /* HEADER */
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
        }
    </style>
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

    {{-- CONTENIDO --}}
    <main class="container my-5 page-content">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')

</body>
</html>