<?php namespace Sightseeing\Users; 

use Sightseeing\Exceptions\ValidationException;

class RegisterUserValidator {

    public static $rules = [
        'name' => 'required|min:2',
        'password' => 'required|min:6|confirmed',
        'email' => 'required|unique:users|email',
        'terms' => 'accepted'
    ];

    protected $validator;

    public function validate(RegisterUserCommand $command)
    {
        $validation = \Validator::make([
            'name' => $command->name,
            'password' => $command->password,
            'password_confirmation' => $command->password_confirmation,
            'email' => $command->email,
            'terms' => $command->terms
        ], static::$rules);


        if($validation->fails()) {
            throw new ValidationException('User validation failed', $validation->errors()->toArray());
        }
    }

} 