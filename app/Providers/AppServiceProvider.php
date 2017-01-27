<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;
use App\Link;
use View, App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if( !App::runningInConsole() ){
            $sitename = Settings::where('metaname','=','sitename')->value('metavalue');
            $links = Link::all();
            $settings = Settings::where('metaname', 'LIKE', '%_%')->get()->pluck('metavalue', 'metaname');

            View::share('sitename', $sitename);
            View::share('links', $links);
            View::share('settings', $settings);
        }
         
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
