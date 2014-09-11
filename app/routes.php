<?php

/**
 * API routes
 *
 * Namespaced and prefixed for versioning purposes
 */
Route::group(array('prefix' => 'api/v1', 'namespace' => 'Sightseeing\Controllers\Api'), function()
{
    Route::get('cities', array('as' => 'cities.list', 'uses' => 'CitiesController@index'));
    Route::get('cities/{id}' , array('as' => 'cities.show', 'uses' => 'CitiesController@show'));

    Route::get('countries', array('as' => 'countries.list', 'uses' => 'CountriesController@index'));
    Route::get('countries/{id}', array('as' => 'countries.show', 'uses' => 'CountriesController@show'));

    Route::get('sights', array('as' => 'sights.list', 'uses' => 'SightsController@index'));
    Route::get('sights/{id}', array('as' => 'sights.show', 'uses' => 'SightsController@show'));

    Route::get('beacons', array('as' => 'beacons.list', 'uses' => 'BeaconsController@index'));
    Route::get('beacons/{id}', array('as' => 'beacons.show', 'uses' => 'BeaconsController@show'));

    Route::post('checkins', array('as' => 'checkin.create', 'uses' => 'CheckinsController@create'));
});


/**
 * Web app routes
 *
 * Guest only
 */
Route::group(array('before' => 'guest', 'namespace' => 'Sightseeing\Controllers'), function()
{
    Route::get('/register', array('as' => 'user.register', 'uses' => 'UsersController@getRegister'));
    Route::post('/register', array('as' => 'user.register', 'before' => 'csrf', 'uses' => 'UsersController@postRegister'));

    Route::get('/login', array('as' => 'user.login', 'uses' => 'UsersController@getLogin'));
    Route::post('/login', array('as' => 'user.login', 'before' => 'csrf', 'uses' => 'UsersController@postLogin'));

    Route::get('activate/{token}', array('as' => 'verify', 'uses' => 'UsersController@verify'));
});

/**
 * Web app routes
 *
 * Users only
 */
Route::group(array('before' => 'auth', 'namespace' => 'Sightseeing\Controllers'), function()
{
    Route::get('/dashboard', array('as' => 'user.dashboard', 'uses' => 'UsersController@index'));
    Route::get('logout', array('as' => 'user.logout', 'uses' => 'UsersController@logout'));

    Route::get('/sights', array('as' => 'sight.index', 'uses' => 'SightsController@index'));
    Route::post('/sights/{id}/upload', array('as' => 'sight.upload', 'uses' => 'SightsController@upload'));
    Route::get('/sights/{id}', array('as' => 'sight.show', 'uses' => 'SightsController@show'));
    Route::post('/sights/{id}', array('as' => 'sight.show', 'uses' => 'SightsController@edit'));
    Route::get('/sights/image/{id}', array('as' => 'sight.image.show', 'uses' => 'SightsController@showImage'));
    Route::get('/sights/image/{id}/delete', array('as' => 'sight.image.delete', 'uses' => 'SightsController@deleteImage'));

    Route::get('/beacons', array('as' => 'beacon.index', 'uses' => 'BeaconsController@index'));
    Route::get('/beacons/{id}', array('as' => 'beacon.show', 'uses' => 'BeaconsController@show'));
});

Route::get('/', function() {
    return View::make('layout.landing.main');
});
