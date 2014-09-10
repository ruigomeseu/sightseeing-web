<?php namespace Sightseeing\Repositories\Sight; 

interface SightRepository {

    function getAll();
    function getById($id);
    function updateById($id, $data);

} 