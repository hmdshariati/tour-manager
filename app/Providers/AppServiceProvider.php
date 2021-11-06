<?php

namespace App\Providers;

use App\Models\Tour;
use App\Observers\TourObserver;
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
    public function boot()
    {
        //
        Tour::observe(TourObserver::class);
        Schema::defaultStringLength(191);
    }
}
