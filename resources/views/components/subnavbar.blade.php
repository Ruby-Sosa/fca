<div class="sub-nav">
    <div class="sub-nav-scroll">

        @foreach($menus as $menu)
            <div class="menu-item">

                @if($menu->items && $menu->items->count())

                    <!-- 🔽 MENU CON SUBMENU -->
                    <a href="#" class="menu-link">
                        {{ $menu->nombre }}
                    </a>

                    <ul class="menu-dropdown">
                        @foreach($menu->items as $item)
                            <li>
                                <a href="{{ $item->href }}" class="menu-dropdown-item">
                                    {{ $item->nombre }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                @else

                    <!-- 🔗 MENU SIN SUBMENU (DIRECTO A VISTA) -->
                    <a href="{{ $menu->href ?? '#' }}" class="menu-link">
                        {{ $menu->nombre }}
                    </a>

                @endif

            </div>
        @endforeach

    </div>
</div>