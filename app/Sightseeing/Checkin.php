<?php namespace Sightseeing; 

use Eloquent;
use Laracasts\Commander\Events\EventGenerator;

class Checkin extends Eloquent {

    use EventGenerator;

    protected $fillable = array('sight_id', 'country', 'mac_address');

    public function sight()
    {
        return $this->belongsTo('Sightseeing\Sight');
    }

} 