<?php

use Sightseeing\City;

class CitySeeder extends Seeder {

    public function run()
    {
        City::create([
            'name' => 'Porto',
            'country_id' => 1,
            'slug' => 'porto',
            'timezone' => 'Europe/Lisbon'
        ]);

        City::create([
            'name' => 'Barcelona',
            'country_id' => 2,
            'slug' => 'barcelona',
            'timezone' => 'Europe/Madrid'
        ]);
    }

} 