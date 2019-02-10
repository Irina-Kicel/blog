<?php

namespace App\Providers;

use App\Custom\Classes\MyMenu;
use Illuminate\Support\ServiceProvider;


class HelpersProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once(app_path('') . '/Custom/helpers.php');
        $this->app->singleton('MyMenu', function ($app){
            return new MyMenu();
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
