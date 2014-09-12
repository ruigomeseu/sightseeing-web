<?php namespace Sightseeing\Repositories\Category; 

use Sightseeing\Category;
use Sightseeing\Repositories\AbstractEloquentRepository;

class EloquentCategoryRepository extends AbstractEloquentRepository implements CategoryRepository {

    protected $model;

    function __construct(Category $model)
    {
        $this->model = $model;
    }
} 