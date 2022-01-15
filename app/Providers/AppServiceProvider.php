<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    public function boot(): void
    {
        setlocale(LC_TIME, 'pt_BR.utf8');
        Carbon::setLocale('pt_BR');
    }
}
