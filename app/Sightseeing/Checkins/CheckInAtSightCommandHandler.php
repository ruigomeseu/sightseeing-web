<?php namespace Sightseeing\Checkins; 

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Sightseeing\Checkins\Events\UserHasCheckedIn;
use Sightseeing\Repositories\Checkin\CheckinRepository;

class CheckInAtSightCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var CheckinRepository
     */
    private $checkinRepository;

    function __construct(CheckinRepository $checkinRepository)
    {
        $this->checkinRepository = $checkinRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $checkin = $this->checkinRepository->create([
            'sight_id' => $command->sight_id,
            'country' => $command->country,
            'mac_address' => $command->mac_address
        ]);

        $checkin->raise(new UserHasCheckedIn($checkin));

        $this->dispatchEventsFor($checkin);
    }
}