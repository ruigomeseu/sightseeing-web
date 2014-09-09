<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    Hello, <br/>
    <br />
    You have successfully registered your account with us, but there is one last step you will need to take before you can log in!<br />
    <br />
    Please click the following link to activate your account:<br />
    <a href="{{ URL::to('activate/'.$confirmation_token) }}">{{ URL::to('activate/'.$confirmation_token) }}</a><br />
    <br />
    If you have any enquiries or problems logging into your account, feel free to email us at hello@sightseeing.io<br />
    <br />
    The Sightseeing.io team.<br />
    <br />
    If you have received this by mistake then please ignore this email.<br />
</div>
</body>
</html>
