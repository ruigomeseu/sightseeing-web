<?php namespace Sightseeing\Repositories\User; 

interface UserRepository {
    function getAll();
    function getById($id);
    function getByConfirmationToken($token);

    function create($data);
    function confirmUserById($id);
} 