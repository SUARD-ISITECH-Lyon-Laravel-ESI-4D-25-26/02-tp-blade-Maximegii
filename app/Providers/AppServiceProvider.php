<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Enregistre les services de l'application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Initialise les services de l'application.
     *
     * @return void
     */
    public function boot()
    {
        // TÂCHE 7 : partager $metaTitle avec toutes les vues
        View::share('metaTitle', 'Blade Test');
    }
}
