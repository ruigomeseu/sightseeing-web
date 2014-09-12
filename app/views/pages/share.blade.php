@extends('layout.landing.main')

@section('content')

<div class="error-code">{{ $sight->name }}</div>
    <br />
    <h1>I've just checked in at {{ $sight->name }} using <a href="http://sightseeing.io">Sightseeing.io</a>!</h2>

    <h3><img src="http://developer.android.com/images/brand/en_generic_rgb_wo_45.png"> | <img src="https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg"></h3>


@endsection