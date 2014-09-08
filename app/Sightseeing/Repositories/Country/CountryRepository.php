<?php namespace Sightseeing\Repositories\Country; 

interface CountryRepository {

    function getAll();
    function getById($id);

} 