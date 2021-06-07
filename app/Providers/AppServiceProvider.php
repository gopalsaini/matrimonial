<?php

namespace App\Providers;

use App\header;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use App\Helpers\commonHelper;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
    public function boot(Request $request)
    {
        Builder::defaultStringLength(191);
        
    
        View::composer('user.header', function($view)
        {   
            $resultsCart = header::cartdData();
            return $view->with('getCartData', $resultsCart);
        });
    }
}
