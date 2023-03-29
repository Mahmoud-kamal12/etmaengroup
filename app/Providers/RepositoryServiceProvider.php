<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->app->bind(
            'App\Http\Repository\Eloquent\AbstractRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\AdminRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\AdvertiserRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\ExpertRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\CategoryRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\SliderRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\CityRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\RegionRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\CommentCarRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\CommentSparePartRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\SettingRepository',
        );

        $this->app->bind(
            'App\Http\Repository\Eloquent\ContactRepository',
        );

    }
}
