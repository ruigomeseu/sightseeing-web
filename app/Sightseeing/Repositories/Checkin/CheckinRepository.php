<?php namespace Sightseeing\Repositories\Checkin; 

interface CheckinRepository {

    function getAll();
    function getById($id);
    function create($data);

} 