<?php

namespace App\Providers;

//use App\Services\Twitter;

use Illuminate\Support\ServiceProvider;

class AppServicevider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //dd();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app()->singleton(Twitter::calss, function() {
//            return new Twitter('api-key');
//        });
    }
}
