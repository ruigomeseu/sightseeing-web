@extends('...layout.auth.main')

@section('content')
<div class="signup-form">
    {{ Form::open(array('route' => 'user.login')) }}

        <div class="signup-text">
            <span>Login</span>
        </div>

        @include('layout.session-messages')

        <div class="form-group w-icon">
            <input type="text" name="email" id="email_id" class="form-control input-lg" placeholder="Email">
            <span class="fa fa-envelope signup-form-icon"></span>
        </div>

        <div class="form-group w-icon">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
            <span class="fa fa-lock signup-form-icon"></span>
        </div>

        <div class="form-actions">
            <input type="submit" value="LOGIN" class="signup-btn bg-primary">
        </div>

    {{ Form::close() }}

        <!-- / "Sign In with" block -->
</div>
    <!-- Right side -->
</div>

<div class="have-account">
    Don't have an account yet? <a href="{{ URL::route('user.register') }}">Sign Up</a>
</div>

@endsection