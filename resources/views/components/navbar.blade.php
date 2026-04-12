<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg main-nav">

        <div class="container-fluid">

            <!-- BOTÓN -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENÚ -->
            <div class="collapse navbar-collapse justify-content-center" id="menuPrincipal">
                
                <!-- 🔵 MENÚ PRINCIPAL -->
                <ul class="navbar-nav text-center">
                    @foreach($menuItems as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url($item->href) }}">
                                {{ $item->nombre_item }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- SUBNAV SOLO EN MÓVIL -->
                <div class="mobile-subnav">

                    @foreach($menus as $menu)
                        <div class="mobile-dropdown">

                            <!-- BOTÓN -->
                            <button class="mobile-title" type="button" data-bs-toggle="collapse" data-bs-target="#menu-{{ $menu->id }}">
                                {{ $menu->nombre }}
                            </button>

                            <!-- CONTENIDO -->
                            <div class="collapse" id="menu-{{ $menu->id }}">
                                @foreach($menu->items as $item)
                                    <a href="{{ $item->href }}" class="mobile-link">
                                        {{ $item->nombre }}
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </nav>
</div>