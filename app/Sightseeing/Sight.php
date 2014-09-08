<?php namespace Sightseeing; 

use Eloquent;

class Sight extends Eloquent {

    protected $fillable = ['name', 'value'];

    public function post()
    {
        return $this->belongsTo('Post');
    }

} 