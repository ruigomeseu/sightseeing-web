<?php namespace Sightseeing\Repositories\User; 

use Hash;
use Sightseeing\Repositories\AbstractEloquentRepository;
use Sightseeing\User;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepository {

    protected $model;

    function __construct(User $model)
    {
        $this->model = $model;
    }


    function create($data)
    {
        $user = new $this->model;

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->confirmed = 0;
        $user->confirmation_token = str_random(12);

        $user->save();

        return $user;
    }

    function getByConfirmationToken($token)
    {
        $user = $this->model->where('confirmation_token', '=', $token)->firstOrFail();

        return $user;
    }

    function confirmUserById($id)
    {
        $user = $this->model->where('id', '=', $id)->firstOrFail();

        $user->confirmed = 1;

        $user->save();
    }
}