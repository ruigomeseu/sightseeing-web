<?php namespace Sightseeing; 

use Eloquent;
use Laracasts\Presenter\PresentableTrait;

class Beacon extends Eloquent {

    use PresentableTrait;

    protected $presenter = 'Sightseeing\Presenters\BeaconPresenter';

    protected $dates = ['installed_at'];

    public function sight()
    {
        return $this->belongsTo('Sightseeing\Sight');
    }

} 