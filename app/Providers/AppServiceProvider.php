<?php

namespace App\Providers;
use App\MainPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{  
    /**
    * Bootstrap any application services.
    *
    * @return void
    */
   public function boot()
   {
       //
       $main = MainPage::find(1);
       View::share('main', $main);
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
