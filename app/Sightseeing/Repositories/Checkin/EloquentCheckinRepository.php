<?php namespace Sightseeing\Repositories\Checkin; 

use Sightseeing\Checkin;
use Sightseeing\Repositories\AbstractEloquentRepository;

class EloquentCheckinRepository extends AbstractEloquentRepository implements CheckinRepository {

    protected $model;

    function __construct(Checkin $model)
    {
        $this->model = $model;
    }


    function create($data)
    {
        return $this->model->create($data);
    }
}