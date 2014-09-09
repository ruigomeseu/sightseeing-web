<?php namespace Sightseeing\Listeners;

use Illuminate\Mail\Mailer;
use Sightseeing\Users\Events\UserWasRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    private $mailer;

    function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function whenUserWasRegistered(UserWasRegistered $event)
    {

        $data['name'] = $event->user->name;
        $data['confirmation_token'] = $event->user->confirmation_token;

        $userInfo = $event->user->toArray();

        $this->mailer->send('emails.auth.welcome', $data, function ($message) use ($userInfo)
        {
            $message->from('donotreply@sightseeing.io', 'Sightseeing.io');

            $message->to($userInfo['email'])->subject('You have registered to Sightseeing.io');

        });
    }

} 