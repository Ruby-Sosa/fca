<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\MenuNav;
use App\Models\SubnavMenu;

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
        View::composer('components.navbar', function ($view) {
            $menuItems = MenuNav::where('estatus', 1)
                ->orderBy('orden', 'asc')
                ->get();

            $view->with('menuItems', $menuItems);
        });

        View::composer('components.subnavbar', function ($view) {
            $menus = SubnavMenu::with('items')
                ->where('estatus', 1)
                ->orderBy('orden', 'asc')
                ->get();

            $view->with('menus', $menus);
        });
    }
}