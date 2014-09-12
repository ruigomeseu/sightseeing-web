<?php

use Sightseeing\Category;

class CategoriesSeeder extends Seeder {

    public function run()
    {
        Category::create([
            'name' => 'Churches',
        ]);

        Category::create([
            'name' => 'Bars',
        ]);

        Category::create([
            'name' => 'Wine Caves',
        ]);

        Category::create([
            'name' => 'Monuments',
        ]);

        Category::create([
            'name' => 'Museums',
        ]);

        Category::create([
            'name' => 'Lookouts',
        ]);

        Category::create([
           'name' => 'Others'
        ]);
    }

} 