<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomersService;
class CustomersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerService::class, function ($app) {
            return new CustomerService();
        });
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
}
