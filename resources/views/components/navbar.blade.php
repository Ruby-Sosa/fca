<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg main-nav navbar-mobile">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="menuPrincipal">

                <div class="mobile-subnav w-100">

                    @foreach($menus as $menu)

                        @if($menu->items->count() > 0)

                            <!-- 🔽 MENÚ CON SUBMENÚ -->
                            <div class="mobile-dropdown">

                                <button class="mobile-title"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#menu-{{ $menu->id }}">

                                    {{ $menu->nombre }}

                                </button>

                                <div class="collapse" id="menu-{{ $menu->id }}">

                                    @foreach($menu->items as $item)
                                        <a href="{{ $item->href }}" class="mobile-link">
                                            {{ $item->nombre }}
                                        </a>
                                    @endforeach

                                </div>

                            </div>

                        @else

                            <!-- 🔗 MENÚ SIN SUBMENÚ (LINK DIRECTO) -->
                            <a href="{{ $menu->href }}" class="mobile-link">
                                {{ $menu->nombre }}
                            </a>

                        @endif

                    @endforeach

                </div>

            </div>

        </div>

    </nav>
</div>