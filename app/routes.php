<?php

Route::get('api/v1/search', array('as' => 'companies.search', 'uses' => 'CompaniesController@search'));

Route::group(array('prefix' => 'api/v1'), function()
{

    Route::get('cities', array('as' => 'cities.list', 'uses' => 'CitiesController@index'));
    Route::get('cities/{id}' , array('as' => 'cities.show', 'uses' => 'CitiesController@show'));

    Route::get('countries', array('as' => 'countries.list', 'uses' => 'CountriesController@index'));
    Route::get('countries/{id}', array('as' => 'countries.show', 'uses' => 'CountriesController@show'));

    Route::get('sights', array('as' => 'sights.list', 'uses' => 'SightsController@index'));
    Route::get('sights/{id}', array('as' => 'sights.show', 'uses' => 'SightsController@show'));

    Route::get('beacons', array('as' => 'beacons.list', 'uses' => 'BeaconsController@index'));
    Route::get('beacons/{id}', array('as' => 'beacons.show', 'uses' => 'BeaconsController@show'));

});

Route::group(array('before' => 'guest'), function()
{
    Route::get('/register', array('as' => 'user.register', 'uses' => 'UsersController@getRegister'));
    Route::post('/register', array('as' => 'user.register', 'before' => 'csrf', 'uses' => 'UsersController@postRegister'));

    Route::get('/login', array('as' => 'user.login', 'uses' => 'UsersController@getLogin'));
    Route::post('/login', array('as' => 'user.login', 'before' => 'csrf', 'uses' => 'UsersController@postLogin'));

    Route::get('activate/{token}', array('as' => 'verify', 'uses' => 'UsersController@verify'));
});


Route::group(array('before' => 'auth'), function()
{
    Route::get('/dashboard', array('as' => 'user.dashboard', 'uses' => 'UsersController@index'));
    Route::get('logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));
});

Route::get('/', function() {
    return View::make('layout.landing.main');
});
