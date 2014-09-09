<?php namespace Sightseeing\Users\Events;

use Sightseeing\User;

class UserWasRegistered {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

}