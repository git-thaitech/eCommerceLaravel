<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\IBaseRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use App\Repositories\Interfaces\IUserRepository;
use CategoryRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IBaseRepository::class, BaseRepository::class);
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(ICategoryRepository::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
