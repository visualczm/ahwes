<?php

namespace App\Providers;

use App\Models\Cases;
use App\Models\Navbar;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //add fixed sql

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
        Schema::defaultStringLength(191); //add fixed sql
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {



    }
}
