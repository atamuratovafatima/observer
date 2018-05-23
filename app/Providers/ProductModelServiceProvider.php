<?php

namespace App\Providers;

use App\Observer\ProductObserver;
use App\Product;
use Illuminate\Support\ServiceProvider;

class ProductModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
