<?php namespace Sightseeing\Repositories\Category; 

interface CategoryRepository {

    function getAll();
    function getById($id);

} 