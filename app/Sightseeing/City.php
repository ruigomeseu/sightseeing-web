<?php namespace Sightseeing; 

use Eloquent;

class City extends Eloquent {

    public function sights()
    {
        return $this->hasMany('Sightseeing\Sight');
    }

    public function country()
    {
        return $this->hasOne('Sightseeing\Country');
    }


} 