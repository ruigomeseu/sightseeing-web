<?php namespace Sightseeing\Repositories\City; 

use Sightseeing\City;
use Sightseeing\Repositories\AbstractEloquentRepository;

class EloquentCityRepository extends AbstractEloquentRepository implements CityRepository {

    protected $model;

    function __construct(City $model)
    {
        $this->model = $model;
    }

}