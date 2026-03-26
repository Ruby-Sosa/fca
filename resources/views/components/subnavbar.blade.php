<div class="sub-nav">
    <div class="container d-flex justify-content-center justify-content-lg-between align-items-center flex-wrap text-center">
        
        @foreach($menus as $menu)
            <div class="dropdown menu-hover">
                
                <!-- Nombre del menú padre -->
                <a href="#" class="dropdown-toggle">
                    {{ $menu->nombre }}
                </a>

                <!-- Submenús -->
                <ul class="dropdown-menu">
                    @foreach($menu->items as $item)
                        <li>
                            <a class="dropdown-item" href="{{ $item->href }}">
                                {{ $item->nombre }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        @endforeach

    </div>
</div>