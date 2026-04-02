<div class="sub-nav d-flex justify-content-center align-items-center">
    <div class="d-flex flex-wrap justify-content-center align-items-center">
        @foreach($menus as $menu)
            <div class="dropdown menu-hover">
                <a href="#" class="dropdown-toggle">
                    {{ $menu->nombre }}
                </a>

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