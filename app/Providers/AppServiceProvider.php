<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function boot() {
        setlocale(LC_TIME, 'pt_BR.utf8');
        Carbon::setLocale('pt_BR');

    }
}
