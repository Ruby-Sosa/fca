<div class="col-12">

    <div class="noticia-item d-flex gap-3 align-items-start">

        {{-- Línea decorativa --}}
        <div class="noticia-linea"></div>

        {{-- Imagen --}}
        <div class="noticia-img">
            <img src="{{ asset('img/'.$imagen) }}" alt="{{ $titulo }}">
        </div>

        {{-- Contenido --}}
        <div class="flex-grow-1">

            <p class="noticia-fecha mb-1">
                {{ $fecha }}
            </p>

            <h5 class="noticia-titulo mb-2">
                {{ $titulo }}
            </h5>

            <p class="noticia-desc mb-2">
                {{ $descripcion }}
            </p>

            <a href="{{ $enlace ?? '#' }}" class="noticia-link">
                Leer más →
            </a>

        </div>

    </div>

</div>