<div class="container-fluid p-0">
    <nav class="main-nav d-flex justify-content-center align-items-center">
        @foreach($menuItems as $item)
            <a href="{{ url($item->href) }}">
                {{ $item->nombre_item }}
            </a>
        @endforeach
    </nav>
</div>