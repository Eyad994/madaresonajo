<?php

namespace App\Providers;

use App\Models\City;
use App\Models\SchoolClass;
use Illuminate\Support\Facades\View;
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
        View::composer('madaresona.main.index', function ($view) {
            $cities = City::all();
            $schoolClasses = SchoolClass::all();
            $view->with('cities', $cities);
            $view->with('schoolClasses', $schoolClasses);
        });
    }
}
