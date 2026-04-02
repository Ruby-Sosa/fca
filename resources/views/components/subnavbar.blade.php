<div class="sub-nav">
    <div class="sub-nav-scroll">
        @foreach($menus as $menu)
            <div class="menu-item">
                <a href="#" class="menu-link">
                    {{ $menu->nombre }}
                </a>

                @if($menu->items && $menu->items->count())
                    <ul class="menu-dropdown">
                        @foreach($menu->items as $item)
                            <li>
                                <a href="{{ $item->href }}" class="menu-dropdown-item">
                                    {{ $item->nombre }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>
