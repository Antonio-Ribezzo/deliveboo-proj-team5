<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'bt7ngxhk5bxgv59v',
                    'publicKey' => '9xrpm9xsthw3qqvz',
                    'privateKey' => 'c52a46c9680aca300efcf2bb0b9093ae'
                ]
            );
        });
    }
}