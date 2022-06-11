<?php

namespace App\Providers;

use App\Charts\GraficoProduto;
use ConsoleTVs\Charts\Registrar;
use Illuminate\Support\Facades\Schema;
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
    public function boot(Registrar $registrar)
    {
        Schema::defaultStringLength(191);

        $registrar->register([
            GraficoProduto::class,
        ]);
    }
}
