<?php namespace Sightseeing; 

use Eloquent;

class Sight extends Eloquent {

    protected $fillable = ['name', 'value'];

    public function city()
    {
        return $this->belongsTo('Sightseeing\City');
    }

    public function beacons()
    {
        return $this->hasMany('Sightseeing\Beacon');
    }

    public function images()
    {
        return $this->hasMany('Sightseeing\SightImage');
    }

} 