<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MenuNav;
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
    $menuItems = MenuNav::where('estatus', 1)
        ->orderBy('orden', 'asc')
        ->get();

    View::share('menuItems', $menuItems);
    }
}
