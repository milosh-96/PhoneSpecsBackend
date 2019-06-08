<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Brand;
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
        $brands = Brand::all();

        view()->share('brands',$brands);
    }
}
