<?php namespace Sightseeing\Repositories; 

use Illuminate\Support\ServiceProvider;

class SightseeingServiceProvider extends ServiceProvider {

    protected $repositories = [
        'City',
        'Country',
        'Sight',
        'Beacon'
    ];

    /**
     * Register the repositories service providers.
     *
     * @return void
     */
    public function register()
    {
        //Loops through all repositories and binds them with their Eloquent implementation
        array_walk($this->repositories, function($repository) {
            $this->app->bind(
                'Sightseeing\Repositories\\' . $repository . '\\' . $repository . 'Repository',
                'Sightseeing\Repositories\\' . $repository . '\\Eloquent' . $repository . 'Repository'
            );
        });
    }

} 