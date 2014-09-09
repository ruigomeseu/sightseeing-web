<?php namespace Sightseeing\Listeners;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $listeners = $this->app['config']->get('sightseeing.listeners');

        foreach($listeners as $listener) {
            $this->app['events']->listen('Sightseeing.*', $listener);
        }
    }
}