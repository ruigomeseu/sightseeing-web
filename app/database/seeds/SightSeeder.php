<?php

use Sightseeing\Sight;

class SightSeeder extends DatabaseSeeder {

    public function run()
    {
        Sight::create([
            'name' => 'Torre dos Clérigos',
            'city_id' => 1,
            'description' => 'Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.',
            'image' => 'http://www.feelporto.com/wp-content/uploads/2013/03/torres-dos-clerigos-2.jpeg'
        ]);

        Sight::create([
            'name' => 'Aquela casa',
            'city_id' => 2,
            'description' => 'Prefect’s bathroom Trelawney veela squashy armchairs, SPEW: Gamp’s Elemental Law of Transfiguration. Magic Nagini bezoar, Hippogriffs Headless Hunt giant squid petrified. Beuxbatons flying half-blood revision schedule, Great Hall aurors Minerva McGonagall Polyjuice Potion. Restricted section the Burrow Wronski Feint gnomes, quidditch robes detention, chocolate frogs. Errol parchment knickerbocker glory Avada Kedavra Shell Cottage beaded bag portrait vulture-hat. Twin cores, Aragog crimson gargoyles, Room of Requirement counter-clockwise Shrieking Shack. Snivellus second floor bathrooms vanishing cabinet Wizard Chess, are you a witch or not?',
            'image' => 'http://barcelona-sights.net/wp-content/uploads/images/bb/casa-batllo-in-barcelona.jpg',
        ]);
    }

} 