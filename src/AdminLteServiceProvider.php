<?php


namespace admin\LTE;


use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/route/web.php');
        $this->publishes([
            __DIR__."/resource/" => public_path('/')
        ]);
    }
    public function register()
    {

    }

}
