<?php namespace Controllers\Api;

use League\Fractal\Manager;
use Sightseeing\Repositories\City\CityRepository;
use Sightseeing\Transformers\CityTransformer;

class CitiesController extends ApiController {

    /**
     * @var CityRepository
     */
    private $cityRepository;

    function __construct(CityRepository $cityRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->cityRepository = $cityRepository;
    }

    public function index()
    {
        $cities = $this->cityRepository->getAll();

        return $this->respondWithCollection($cities, new CityTransformer);
    }

    public function show($cityId)
    {
        $city = $this->cityRepository->getById($cityId);

        return $this->respondWithItem($city, new CityTransformer);
    }

} 