<?php namespace Controllers\Api;

use League\Fractal\Manager;
use Sightseeing\Repositories\Sight\SightRepository;
use Sightseeing\Transformers\SightTransformer;

class SightsController extends ApiController {

    private $sightRepository;

    function __construct(SightRepository $sightRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->sightRepository = $sightRepository;
    }

    public function index()
    {
        $cities = $this->sightRepository->getAll();

        return $this->respondWithCollection($cities, new SightTransformer);
    }

    public function show($sightId)
    {
        $sight = $this->sightRepository->getById($sightId);

        return $this->respondWithItem($sight, new SightTransformer);
    }

} 