<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('convert', function ($money) {
            return "<?php echo e(Number::currency($money, in: config('app.currency'), locale: config('app.locale'), precision: 0)); ?>";
        });
    }
}
