<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrap();
        Blade::directive('price_format', function ($price) {
            return "<?php echo number_format($price, 0, ',', ' '); ?>";
        });

        view()->composer('layouts.layout', function ($view) {
            $view->with('categories', Category::all());
        });
    }
}
