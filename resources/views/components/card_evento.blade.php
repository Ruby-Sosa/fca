<div class="col-md-6 col-lg-3">

    <div class="card h-100 border-0 shadow-sm"
         style="background-color:#3d5876; color:white;">

        <div class="card-header border-0 fw-bold"
             style="background-color:#3d5876; min-height:90px; font-size:14px;">

            {{ $titulo }}

        </div>

        <img src="{{ asset('img/'.$imagen) }}"
             class="card-img-top"
             style="height:220px; object-fit:cover;"
             alt="{{ $titulo }}">

        <div class="card-body">

            <p class="mb-2">
                <strong>Fecha:</strong>
                {{ $fecha }}
            </p>

            <p class="mb-0">
                <strong>Hora:</strong>
                {{ $hora }}
            </p>

        </div>

        <div class="card-footer border-0 text-end"
             style="background-color:#3d5876;">

            <a href="{{ $enlace ?? '#' }}"
               class="text-white fw-bold text-decoration-none">

                Ver más...

            </a>
        </div>
    </div>
</div>