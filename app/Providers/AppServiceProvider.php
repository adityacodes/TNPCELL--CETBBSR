<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings;
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
            if(isset($sitename)){
                View::share('sitename', $sitename);
            }
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
