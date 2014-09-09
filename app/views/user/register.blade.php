@extends('...layout.auth.main')

@section('content')
<div class="signup-form">

    {{ Form::open(array('route' => 'user.register')) }}

        <div class="signup-text">
            <span>Create an account</span>
        </div>

        @include('layout.session-messages')

        <div class="form-group w-icon">
            <input type="text" name="name" id="name_id" class="form-control input-lg" placeholder="Name">
            <span class="fa fa-user signup-form-icon"></span>
        </div>

        <div class="form-group w-icon">
            <input type="text" name="email" id="email_id" class="form-control input-lg" placeholder="Email">
            <span class="fa fa-envelope signup-form-icon"></span>
        </div>

        <div class="form-group w-icon">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
            <span class="fa fa-lock signup-form-icon"></span>
        </div>

        <div class="form-group w-icon">
            <input type="password" name="password_confirmation" id="password_id" class="form-control input-lg" placeholder="Password Confirmation">
            <span class="fa fa-lock signup-form-icon"></span>
        </div>

        <div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
            <label class="checkbox-inline">
                <input type="checkbox" name="terms" class="px" id="confirm_id">
                <span class="lbl">I agree with the <a href="#" target="_blank">Terms and Conditions</a></span>
            </label>
        </div>

        <div class="form-actions">
            <input type="submit" value="SIGN UP" class="signup-btn bg-primary">
        </div>

    {{ Form::close() }}

</div>
    <!-- Right side -->
</div>

<div class="have-account">
    Already have an account? <a href="{{ URL::route('user.login') }}">Sign In</a>
</div>

@endsection