<?php

use Sightseeing\Beacon;

class BeaconSeeder extends Seeder {

    public function run()
    {
        Beacon::create([
            'name' => 'Torre dos Clérigos',
            'sight_id' => 1,
            'UUID' => 'E2C56DB5-DFFB-48D2-D060-D0F5A71096E0',
            'major' => 1234,
            'minor' => 5680
        ]);

        Beacon::create([
            'name' => 'Aquela casa',
            'sight_id' => 2,
            'UUID' => 'E2C56DB5-DFFB-48D2-D060-D0F5A71096E0',
            'major' => 1234,
            'minor' => 5679
        ]);
    }

} 