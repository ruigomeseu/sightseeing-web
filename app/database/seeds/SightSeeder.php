<?php

use Sightseeing\Sight;

class SightSeeder extends DatabaseSeeder {

    public function run()
    {
        $sight1 = Sight::create([
            'name' => 'Torre dos Clérigos',
            'city_id' => 1,
            'description' => 'A Torre dos Clérigos é uma torre sineira que faz parte da Igreja dos Clérigos e está situada na cidade do Porto, Portugal. É um monumento considerado por muitos o ex libris da cidade do Porto.

A torre foi construída entre 1754 e 1763 com projecto do italiano Nicolau Nasoni sob encomenda de Dom Jerónimo de Távora Noronha Leme e Cernache a pedido da Irmandade dos Clérigos Pobres. O seu arquitecto, Nicolau Nasoni, contribuiu durante muitos anos para a construção da grande torre dos clérigos sem receber nada em troca e só alguns anos depois isso aconteceu.

Está classificada pelo IPPAR como Monumento Nacional desde 1910.',
        ]);

        $sight1->categories()->attach([1, 4]);

        $sight2 = Sight::create([
            'name' => 'Funicular dos Guindais',
            'city_id' => 1,
            'description' => 'O Funicular dos Guindais é uma ferrovia ligeira que se localiza na cidade do Porto, em Portugal, e liga a Batalha (Rua Augusto Rosa) à Ribeira (Av. Gustave Eiffel). É operado pelo Metro do Porto.

Desde a sua inauguração, em fevereiro de 2004, até outubro de 2013 já transportou cerca de 3,7 milhões de pessoas.',
        ]);

        $sight2->categories()->attach([6]);

        $sight3 = Sight::create([
            'name' => 'Offley Port Cave',
            'city_id' => 1,
            'description' => 'Criada em 1737 por William Offley, a empresa ganhou renome e prestígio internacional sob a direção de Joseph James Forrester, uma personagem marcante da história do Vinho do Porto, distinguido com o título de Barão pelo Rei de Portugal.

            O Barão de Forrester, um homem de negócios, enólogo, respeitado provador de vinhos, artista e autor de mapas, foi uma das principais personagens na história do Vinho do Porto.

            As ancestrais Caves Offley oferecem aos seus visitantes uma experiência inigualável onde a calma e o silêncio imperam.'
        ]);

        $sight3->categories()->attach([3]);
    }

} 