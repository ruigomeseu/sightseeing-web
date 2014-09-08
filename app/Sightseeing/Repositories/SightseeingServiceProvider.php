<?php namespace Sightseeing\Repositories; 

use Illuminate\Support\ServiceProvider;

class SightseeingServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Sightseeing\Repositories\City\CityRepository',
            'Sightseeing\Repositories\City\EloquentCityRepository'
        );

    }

} 