<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mainMenu();
        // $this->footerMenu();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function mainMenu(){
        view()->composer('frontend.partials._nav','App\Http\Composers\NavigationComposer@getInspired');
        // view()->composer('frontend.partials._nav','App\Http\Composers\NavigationComposer@whereWego');
    }     
    
    private function footerMenu(){
        // view()->composer('frontend.pages.contact','App\Http\Composers\NavigationComposer@footer');
        view()->composer('frontend.partials._footer','App\Http\Composers\NavigationComposer@footer');
        // view()->composer('frontend.pages.contact','App\Http\Composers\NavigationComposer@footer');
        // view()->composer('frontend.contact','App\Http\Composers\NavigationComposer@footer');      
        // view()->composer('frontend.partials._footer','App\Http\Composers\NavigationComposer@getPage');
    }    
}
