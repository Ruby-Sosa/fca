@extends('layouts.app')

@section('title','Inicio')

@section('content')

{{-- Banner interactivo --}}
<section class="banner-slider">

    @foreach($banners as $index => $banner)
    <div class="banner-slide {{ $index == 0 ? 'active' : '' }}">

        {{-- Imagen principal --}}
        <img class="banner-main" 
             src="{{ asset('img/'.$banner->imagen) }}" />

        {{-- Panel de información --}}
        <div class="banner-content">

            {{-- fondo opaco del contenido --}}
            <div class="banner-bg"
                 style="background-image: url('{{ asset('img/'.$banner->imagen_fondo) }}')">
            </div>

            <div class="banner-text">
                <h2>{{ $banner->titulo }}</h2>
                <p>{{ $banner->descripcion }}</p>

                <a href="{{ $banner->enlace }}" class="btn-banner">
                    Ver más
                </a>
            </div>

        </div>

    </div>
    @endforeach

    <button class="banner-prev">‹</button>
    <button class="banner-next">›</button>

</section>

{{-- Bienvenida --}}
<section class="py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white shadow-sm rounded-4 p-4 p-md-5 text-center border">
    <span class="text-uppercase fw-semibold subtitulo-fca">
        Bienvenidos 
    </span>
    <h2 class="fw-bold mt-2 mb-3 titulo-fca">
    {{ $seccion->titulo }}
    </h2>
    {{-- 🔥 DESCRIPCIÓN --}}
    <p class="descripcion-fca">
        Fundada en 1962 como la Escuela de Comercio y Administración, la Facultad de Contaduría y Administración (FCA) es actualmente el plantel con mayor matrícula de estudiantes en la Universidad Autónoma de Yucatán. 
        Ubicada en el Campus de Ciencias Sociales, Económico-Administrativas y Humanidades, la institución ofrece cuatro licenciaturas: Contador Público (con presencia en Mérida y Tizimín), Administración, Mercadotecnia y Negocios Internacionales, y Administración de Tecnologías de Información. 
        Asimismo, su Unidad de Posgrado e Investigación imparte maestrías especializadas en Finanzas, Impuestos, Mercadotecnia Digital y Dirección Estratégica.
    </p>
</div>
            </div>
        </div>
    </div>
</section>

{{-- Noticias --}}
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="text-uppercase fw-semibold" style="color:#c69214; letter-spacing:1px; font-size:.85rem;">
                    Actualidad
                </span>
                <h3 class="fw-bold mb-0" style="color:#0b2c55;">Noticias</h3>
            </div>
        </div>

        <div class="row g-4">
            <div class="noticias-grid">
                @foreach($apartados as $index => $apartado)
                    <div class="noticia {{ $index == 0 ? 'grande' : '' }}">
                        <img src="{{ asset('img/'.$apartado->imagen) }}" alt="">
                        <div class="contenido">
                            <p class="fecha">
                                {{ \Carbon\Carbon::parse($apartado->fecha)->format('d \d\e F \d\e Y') }}
                            </p>
                            <h5>{{ $apartado->titulo }}</h5>
                            <a href="{{ $apartado->enlace ?? '#' }}">
                                Leer más →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Agenda Digital --}}
<section class="py-4 pb-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="text-uppercase fw-semibold" style="color:#c69214; letter-spacing:1px; font-size:.85rem;">
                    Participa
                </span>
                <h3 class="fw-bold mb-0" style="color:#0b2c55;">Agenda Digital Universitaria</h3>
            </div>
        </div>

        <div class="row g-4">
            @foreach($eventos as $evento)
                @include('components.card_evento',[
                    'titulo'=>$evento->titulo,
                    'imagen'=>$evento->imagen,
                    'fecha'=>\Carbon\Carbon::parse($evento->fecha)->format('d \d\e F \d\e Y'),
                    'hora'=>$evento->hora,
                    'enlace'=>$evento->enlace
                ])
            @endforeach
        </div>
    </div>
</section>

{{-- Coordinaciones --}}
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="text-uppercase fw-semibold" style="color:#c69214; letter-spacing:1px; font-size:.85rem;">
                    Información
                </span>
                <h3 class="fw-bold mb-0" style="color:#0b2c55;">Coordinaciones</h3>
            </div>

        </div>

        <div class="row g-4">
            @foreach($coordinaciones as $coordinacion)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 aviso-coordinacion">
                        @if($coordinacion->imagen)
                            <img src="{{ asset('img/'.$coordinacion->imagen) }}"
                                 class="card-img-top aviso-img"
                                 alt="{{ $coordinacion->titulo }}">
                        @endif

                        <div class="card-body p-4">
                            <h5 class="fw-bold text-fca">
                                {{ $coordinacion->titulo }}
                            </h5>

                            <p class="text-muted mb-0">
                                {{ Str::limit($coordinacion->descripcion, 110) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const slides = document.querySelectorAll(".banner-slide");
    const nextBtn = document.querySelector(".banner-next");
    const prevBtn = document.querySelector(".banner-prev");

    let index = 0;
    let interval;

    // Mostrar slide activo
    function showSlide(i) {
        slides.forEach(slide => slide.classList.remove("active"));
        slides[i].classList.add("active");
    }

    // Siguiente slide
    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    //  Anterior slide
    function prevSlide() {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    }

    //  Auto cambio
    function startAuto() {
        interval = setInterval(nextSlide, 5000);
    }

    //  Reiniciar timer cuando el usuario interactúa
    function resetAuto() {
        clearInterval(interval);
        startAuto();
    }

    //  Inicialización segura
    if (slides.length > 0) {
        showSlide(0);
        startAuto();
    }

    //  Botón siguiente
    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            nextSlide();
            resetAuto();
        });
    }

    //  Botón anterior
    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            prevSlide();
            resetAuto();
        });
    }

});
</script>

@endsection