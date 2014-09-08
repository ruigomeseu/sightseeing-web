<?php

use Sightseeing\Country;

class CountrySeeder extends Seeder {

    public function run()
    {
        Country::create([
            'name' => 'Portugal',
            'flag_image' => 'http://i.imgur.com/NLrMOWr.png'
        ]);

        Country::create([
            'name' => 'Spain',
            'flag_image' => 'http://i.imgur.com/xpBvagM.gif'
        ]);
    }

} 