<?php namespace Sightseeing\Listeners; 

use Laracasts\Commander\Events\EventListener;
use Pusher;
use Sightseeing\Checkins\Events\UserHasCheckedIn;

class PusherNotifier extends EventListener {

    public function whenUserHasCheckedIn(UserHasCheckedIn $event)
    {
        $pusher = new Pusher($_ENV['PUSHER_KEY'], $_ENV['PUSHER_SECRET'], $_ENV['PUSHER_APP_ID']);

        $pusher->trigger("sightseeing.io", "userCheckedIn", [
           "country" => $event->checkin->country,
            "sight" => $event->checkin->sight->name
        ]);
    }
} 