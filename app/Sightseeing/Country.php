<?php namespace Sightseeing; 

use Eloquent;

class Country extends Eloquent {

    public function cities()
    {
        return $this->hasMany('Sightseeing\City');
    }

}