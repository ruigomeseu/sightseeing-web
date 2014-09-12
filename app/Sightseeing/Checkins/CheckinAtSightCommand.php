<?php namespace Sightseeing\Checkins; 

class CheckInAtSightCommand {

    public $sight_id;
    public $country;
    public $mac_address;

    function __construct($country, $mac_address, $sight_id)
    {
        $this->sight_id = $sight_id;
        $this->country = $country;
        $this->mac_address = $mac_address;
    }

}