<?php namespace Sightseeing\Repositories;

/**
 * Common methods for different entities
 */
abstract class AbstractEloquentRepository
{

    /**
     * @param array $load
     * @return mixed
     */
    public function getAll($load = array())
    {
        $data = $this->model->with($load)->get();

        return $data;
    }


    /**
     * Fetch a single item from db table. Limit to filters if provided
     * @param $id
     * @internal param array $filters
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

} 