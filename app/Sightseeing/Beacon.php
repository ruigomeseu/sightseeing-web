<?php namespace Sightseeing; 

use Eloquent;

class Beacon extends Eloquent {

    protected $dates = ['installed_at'];

    public function sight()
    {
        return $this->belongsTo('Sightseeing\Sight');
    }

} 