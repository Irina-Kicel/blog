<?php

namespace App\Providers;

use App\Custom\Classes\MyMenu;
use App\Custom\Classes\Uploader;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(MyMenu $myMenu, Uploader $uploader)
    {
        View::share('myMenu', $myMenu->getMenu());
        //View::share('mainUploader', $uploader->upload());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
