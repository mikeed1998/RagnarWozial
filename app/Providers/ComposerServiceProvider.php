<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Servicio;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials.header', function ($view) {
            $servicios = Servicio::all(); // Ejemplo de cómo obtener servicios de TuModelo
            $view->with('servicios', $servicios);
        });
    }
}
