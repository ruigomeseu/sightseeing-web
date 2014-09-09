<?php namespace Sightseeing\Users; 

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Sightseeing\Repositories\User\UserRepository;
use Sightseeing\Users\Events\UserWasRegistered;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var \Sightseeing\Repositories\User\UserRepository
     */
    private $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $user = $this->userRepository->create([
            'name' => $command->name,
            'password' => $command->password,
            'email' => $command->email,
        ]);

        $user->raise(new UserWasRegistered($user));

        $this->dispatchEventsFor($user);

        return $user;
    }
}