<?php namespace Sightseeing\Repositories\Beacon; 

interface BeaconRepository {

    function getAll();
    function getById($id);

} 