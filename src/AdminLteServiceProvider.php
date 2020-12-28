<?php


namespace admin\LTE;


use admin\LTE\model\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/route/web.php');
        $this->publishes([
            __DIR__."/resource/" => public_path('/'),
            __DIR__."/view" => resource_path('/views/adminLTE')
//            __DIR__."/model/" => app_path('/Models/AdminLTE')
        ]);
        $this->loadViewsFrom(__DIR__."/view",'adminLTE');
        $this->loadMigrationsFrom(__DIR__."/migration");
        if (\Schema::hasTable('permissions')) {
            foreach (Permission::all() as $permission) {
                Gate::define($permission->name , function($user) use ($permission){
                    return $user->hasPermission($permission);
                });
            }
        }

    }
    public function register()
    {

    }

}
