<div class="col-md-6 col-lg-3">

    <div class="card h-100 border-0 shadow-sm overflow-hidden"
         style="border-radius:12px; background-color:#0b2c55; color:white; transition:0.3s;">

        {{-- Imagen --}}
        <div style="overflow:hidden;">
            <img src="{{ asset('img/'.$imagen) }}"
                 class="card-img-top"
                 style="height:200px; object-fit:cover; transition:0.3s;"
                 alt="{{ $titulo }}">
        </div>

        {{-- Contenido --}}
        <div class="p-3">

            {{-- Título --}}
            <h6 class="fw-bold mb-2" style="min-height:50px;">
                {{ $titulo }}
            </h6>

            {{-- Fecha --}}
            <p class="mb-2 small">
                <strong>Fecha:</strong> {{ $fecha }}
            </p>

            {{-- Descripción --}}
            <p class="small text-light" style="opacity:0.9;">
                {{ $descripcion }}
            </p>

        </div>

        {{-- Footer --}}
        <div class="px-3 pb-3 text-end">
            <a href="{{ $enlace ?? '#' }}"
               class="text-white fw-bold text-decoration-none small">
                Ver más...
            </a>
        </div>

    </div>

</div>