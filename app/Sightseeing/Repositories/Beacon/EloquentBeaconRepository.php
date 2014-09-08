<?php namespace Sightseeing\Repositories\Beacon; 

use Sightseeing\Beacon;
use Sightseeing\Repositories\AbstractEloquentRepository;

class EloquentBeaconRepository extends AbstractEloquentRepository implements BeaconRepository {

    protected $model;

    function __construct(Beacon $model)
    {
        $this->model = $model;
    }


} 