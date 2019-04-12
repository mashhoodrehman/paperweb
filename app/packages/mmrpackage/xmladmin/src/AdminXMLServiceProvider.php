<?php

namespace App\packages\mmrpackage\adminXML\src;

use Illuminate\Support\ServiceProvider;

class AdminXMLServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('App\packages\mmrpackage\xmladmin\src\Controller\AdminController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
