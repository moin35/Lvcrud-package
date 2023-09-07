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
        $this->loadViewsFrom(__DIR__.'/views/products', 'Lvcrud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
        __DIR__.'/views/products' => resource_path('/views/products/vendor/Lvcrud'),
    ]);
        
    }
}
