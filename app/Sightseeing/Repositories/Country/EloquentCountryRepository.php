<?php namespace Sightseeing\Repositories\Country; 

use Sightseeing\Country;
use Sightseeing\Repositories\AbstractEloquentRepository;

class EloquentCountryRepository extends AbstractEloquentRepository implements CountryRepository {

    protected $model;

    function __construct(Country $model)
    {
        $this->model = $model;
    }


} 