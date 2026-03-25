<div class="container-fluid p-0">
    <nav style="background-color:#c69214;" class="d-flex justify-content-around align-items-center py-3">
        @foreach($menuItems as $item)
            <a class="text-dark fw-bold text-decoration-none" href="{{ url($item->href) }}">
                {{ $item->nombre_item }}
            </a>
        @endforeach
    </nav>
</div>