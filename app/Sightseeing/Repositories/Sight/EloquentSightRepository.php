<?php namespace Sightseeing\Repositories\Sight; 

use Sightseeing\Repositories\AbstractEloquentRepository;
use Sightseeing\Sight;

class EloquentSightRepository extends AbstractEloquentRepository implements SightRepository {

    protected $model;

    function __construct(Sight $model)
    {
        $this->model = $model;
    }


} 