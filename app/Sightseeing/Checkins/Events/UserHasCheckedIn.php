<?php namespace Sightseeing\Checkins\Events; 

class UserHasCheckedIn {

    public $checkin;

    function __construct($checkin)
    {
        $this->checkin = $checkin;
    }


} 