<?php namespace Sightseeing; 

use Eloquent;

class SightImage extends Eloquent {

    public function sight()
    {
        return $this->belongsTo('Sightseeing\Sight');
    }

} 