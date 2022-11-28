<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('rightnow', function($time) {
            $date = date('d/m/Y', $time);
            echo $date;
        });

        Blade::if('mailer', function($input) {
            $configuredMailer = config('mail.default');
            return $input == $configuredMailer;
        });
    }
}
