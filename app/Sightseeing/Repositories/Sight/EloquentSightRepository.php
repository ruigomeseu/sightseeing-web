<?php namespace Sightseeing\Repositories\Sight; 

use Sightseeing\Repositories\AbstractEloquentRepository;
use Sightseeing\Sight;

class EloquentSightRepository extends AbstractEloquentRepository implements SightRepository {

    protected $model;

    function __construct(Sight $model)
    {
        $this->model = $model;
    }

    function updateById($id, $data)
    {
        $sight = $this->model->findOrFail($id);

        $sight->name = $data['name'];

        $sight->description = $data['description'];

        $sight->save();
    }


} 