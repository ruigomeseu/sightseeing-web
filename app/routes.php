<?php

Route::get('api/v1/search', array('as' => 'companies.search', 'uses' => 'CompaniesController@search'));

Route::group(array('prefix' => 'api/v1'), function()
{

    Route::get('cities', array('as' => 'cities.list', 'uses' => 'CitiesController@index'));

    Route::get('countries', array('as' => 'countries.list', 'uses' => 'CountriesController@index'));

});

Route::get('/', function() {
    dd('Under construction!');
});