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
       $mainpage = MainPage::find(1);
       View::share('mainpage', $mainpage);
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
