<?php namespace Sightseeing\Users;

class RegisterUserCommand {

    public $username;
    public $password;
    public $password_confirmation;
    public $email;
    public $terms;

    function __construct($name, $password, $password_confirmation, $email, $terms = null)
    {
        $this->name = $name;
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
        $this->email = $email;
        $this->terms = $terms;
    }

}