<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;

use App\Providers\ComposerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

   
    public function boot()
    {
        Schema::defaultStringLength(191);


        /*view()->composer(
            'app',
            'App\Http\ViewComposers\UserComposer'
        );*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
