<?php

use Sightseeing\Beacon;

class BeaconSeeder extends Seeder {

    public function run()
    {
        Beacon::create([
            'name' => 'Torre dos Clérigos',
            'sight_id' => 1,
            'major' => 1234,
            'minor' => 5680
        ]);

        Beacon::create([
            'name' => 'Aquela casa',
            'sight_id' => 2,
            'major' => 1234,
            'minor' => 5679
        ]);
    }

} 