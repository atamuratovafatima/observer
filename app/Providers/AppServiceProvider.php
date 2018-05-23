<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component("components.alert", 'alert');
        Blade::directive('datetime', function($expression)
        {
            return "<?php echo date('m/d/Y H:i', $expression)?>";
        });
        Blade::directive('upper', function($expression)
        {
            return "<?php echo strtoupper($expression)?>";
        });

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
