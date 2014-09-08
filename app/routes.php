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

Route::get('/', function() {
    dd('We got rid of the pretty landing page. Check back soon!');
});