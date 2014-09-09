<?php namespace Controllers\Api;

use Laracasts\Commander\CommanderTrait;
use Sightseeing\Repositories\User\UserRepository;
use Sightseeing\Users\RegisterUserCommand;

class UsersController extends BaseController {

    use CommanderTrait;

    /**
     * @var UserRepository
     */
    private $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return View::make('user.dashboard');
    }

    /**
     * Shows a registration form
     */
    public function getRegister()
    {
        return View::make('user.register')
            ->with('title', 'Register');
    }

    /**
     * Creates a new user
     */
    public function postRegister()
    {
        try {
            $this->execute(RegisterUserCommand::class);
        } catch (\Sightseeing\Exceptions\ValidationException $exception)
        {
            return Redirect::route('user.register')
                ->withInput()
                ->withErrors($exception->getErrors());
        }

        return Redirect::route('user.register')
            ->with('message', 'You have successfully registered an account with us.<br />We have sent an activation link to your email.');
    }

    /**
     * Shows a login form
     */
    public function getLogin() {
        return View::make('user.login')
            ->with('title', 'Login');
    }

    /**
     * Processes a user login
     */
    public function postLogin() {
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        $auth = Auth::attempt($credentials, Input::get('remember'));

        if($auth)
        {
            //If the user isn't confirmed, the login fails and the user is redirected back.
            if(Auth::user()->confirmed == 0)
            {
                Auth::logout();
                return Redirect::route('user.login')->withErrors('You must first activate your account before you can log in, please check your email.');
            } else {
                return Redirect::route('dashboard');
            }

        } else {
            return Redirect::route('user.login')
                ->withErrors('Invalid login credentials.')
                ->withInput(Input::only('username'));
        }
    }

    /**
     * Verify a user account
     * @param $token string A token that references the user to verify
     * @return \Illuminate\Http\RedirectResponse Redirects the user to the appropriate login form
     */
    public function verify($token) {
        $user = $this->userRepository->getByConfirmationToken($token);

        if($user->confirmed != 0) {
            return Redirect::route('user.login')
                ->withErrors('You have already activated your account, please log in below.');
        } else {
            $this->userRepository->confirmUserById($user->id);

            return Redirect::route('user.login')
                ->with('message', 'You have successfully activated your account, you can now log in and play!');
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('user.login')
            ->withErrors('You have successfully logged out.');
    }

} 