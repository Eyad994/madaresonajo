<?php

namespace App\Providers;

use App\Models\Advertisement;
use App\Models\City;
use App\Models\SchoolClass;
use App\Models\Supplier;
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

        View::composer('ads', function ($view) {
            $ads = Advertisement::where('active', 1)->orderBy('order')->get();
            $view->with('ads', $ads);
        });

        View::composer('suppliers', function ($view) {
            $specialSuppliers = Supplier::where('special', 1)->where('active', 1)->get();
            $view->with('specialSuppliers', $specialSuppliers);
        });

        View::composer('madaresona.partials.sub_header', function ($view) {
            $cities = City::all();
            $schoolClasses = SchoolClass::all();
            $view->with('cities', $cities);
            $view->with('schoolClasses', $schoolClasses);
        });
    }
}
