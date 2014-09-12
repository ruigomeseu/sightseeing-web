<?php namespace Sightseeing\Controllers\Api;

use Input;
use Laracasts\Commander\CommanderTrait;
use League\Fractal\Manager;
use Request;
use Sightseeing\Checkins\CheckinAtSightCommand;
use Sightseeing\Repositories\Checkin\CheckinRepository;

class CheckinsController extends ApiController {

    use CommanderTrait;

    private $beaconRepository;

    function __construct(CheckinRepository $beaconRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->beaconRepository = $beaconRepository;
    }

    public function create()
    {
        $this->execute(CheckInAtSightCommand::class, [
            'country' => Input::get("country"),
            'mac_address' => Input::get("mac_address"),
            'sight_id' => Input::get("sight_id")
        ]);

        return "OK";
    }

}