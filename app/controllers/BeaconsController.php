<?php

use League\Fractal\Manager;
use Sightseeing\Repositories\Beacon\BeaconRepository;

class BeaconsController extends ApiController {

    private $beaconRepository;

    function __construct(BeaconRepository $beaconRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->beaconRepository = $beaconRepository;
    }

    public function index()
    {
        $cities = $this->beaconRepository->getAll();

        return $this->respondWithCollection($cities, new BeaconTransformer);
    }

    public function show($beaconId)
    {
        $beacon = $this->beaconRepository->getById($beaconId);

        return $this->respondWithItem($beacon, new BeaconTransformer);
    }

} 