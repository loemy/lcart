<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contract\Admins\Customer\CustomerGroupContract as CustomerGroupContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerGroupContract::class, CustomerGroupRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
