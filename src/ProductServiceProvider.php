<?php

namespace Moin35\Lvcrud;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Lvcrud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/views' => resource_path('views/vendor/Lvcrud'),],'views');
         $this->publishes([
                __DIR__.'/Http/Controllers/ProductController.php' => app_path('Http/Controllers/Lvcrud/ProductController.php'),
            ], 'controllers');
            
        // $this->publishes([
        //     __DIR__.'/routes/web.php' => base_path('routes/mypackage.php'),
        // ], 'routes');
        // if ($this->app->runningInConsole()) {
        //         $this->publishes([
        //             __DIR__.'/routes/web.php' => base_path('routes/web.php'),
        //         ], 'routes');
        //     }
    }
}
