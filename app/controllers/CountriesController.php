<?php

use League\Fractal\Manager;
use Sightseeing\Repositories\Country\CountryRepository;
use Sightseeing\Transformers\CountryTransformer;

class CountriesController extends ApiController {

    /**
     * @var CountryRepository
     */
    private $countryRepository;

    function __construct(CountryRepository $countryRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->countryRepository = $countryRepository;
    }

    public function index()
    {
        $cities = $this->countryRepository->getAll();

        return $this->respondWithCollection($cities, new CountryTransformer);
    }

} 