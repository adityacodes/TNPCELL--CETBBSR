<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $sitename = Settings::where('metaname','=','sitename')->value('metavalue');
        View::share('sitename', $sitename);
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
