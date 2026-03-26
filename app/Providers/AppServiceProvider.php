<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MenuNav;
use App\Models\SubnavMenu;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Navbar principal
    $menuItems = MenuNav::where('estatus', 1)
        ->orderBy('orden', 'asc')
        ->get();

    View::share('menuItems', $menuItems);

    View::composer('components.subnavbar', function ($view) {
            $menus = SubnavMenu::with('items')
                ->where('estatus', 1)
                ->orderBy('orden')
                ->get();

            $view->with('menus', $menus);
            });
    }
}
