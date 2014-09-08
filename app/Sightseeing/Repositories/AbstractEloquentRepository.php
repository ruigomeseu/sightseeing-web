<?php namespace Sightseeing\Repositories;

/**
 * Common methods for different entities
 */
abstract class AbstractEloquentRepository
{

    /**
     * @param int $limit
     * @param array $load
     * @return mixed
     */
    public function getAll($limit = 10, $load = array())
    {
        $data = $this->model->with($load)->paginate($limit);
        return $data;
    }


    /**
     * Fetch a single item from db table. Limit to filters if provided
     * @param $id
     * @param array $filters
     * @return mixed
     */
    public function getById($id, $filters = array())
    {
        if(!empty($filters))
        {
            return $this->model->find($id, $filters);
        }

        return $this->model->find($id);

    }

} 