<?php

use Sightseeing\Sight;

class SightSeeder extends DatabaseSeeder {

    public function run()
    {
        $sight1 = Sight::create([
            'name' => 'Torre dos Clérigos',
            'city_id' => 1,
            'latitude' => '41.145675',
            'longitude' => '-8.614599',
            'description' => 'A Torre dos Clérigos é uma torre sineira que faz parte da Igreja dos Clérigos e está situada na cidade do Porto, Portugal. É um monumento considerado por muitos o ex libris da cidade do Porto.

A torre foi construída entre 1754 e 1763 com projecto do italiano Nicolau Nasoni sob encomenda de Dom Jerónimo de Távora Noronha Leme e Cernache a pedido da Irmandade dos Clérigos Pobres. O seu arquitecto, Nicolau Nasoni, contribuiu durante muitos anos para a construção da grande torre dos clérigos sem receber nada em troca e só alguns anos depois isso aconteceu.

Está classificada pelo IPPAR como Monumento Nacional desde 1910.',
        ]);

        $sight1->categories()->attach([1, 4]);

        $sight2 = Sight::create([
            'name' => 'Funicular dos Guindais',
            'city_id' => 1,
            'latitude' => '41.140944',
            'longitude' => '-8.6095',
            'description' => 'O Funicular dos Guindais é uma ferrovia ligeira que se localiza na cidade do Porto, em Portugal, e liga a Batalha (Rua Augusto Rosa) à Ribeira (Av. Gustave Eiffel). É operado pelo Metro do Porto.

Desde a sua inauguração, em fevereiro de 2004, até outubro de 2013 já transportou cerca de 3,7 milhões de pessoas.',
        ]);

        $sight2->categories()->attach([6]);

        $sight3 = Sight::create([
            'name' => 'Sandeman',
            'city_id' => 1,
            'latitude' => '41.137649',
            'longitude' => '-8.612400',
            'description' => 'Criada em 1737 por William Offley, a empresa ganhou renome e prestígio internacional sob a direção de Joseph James Forrester, uma personagem marcante da história do Vinho do Porto, distinguido com o título de Barão pelo Rei de Portugal.

            O Barão de Forrester, um homem de negócios, enólogo, respeitado provador de vinhos, artista e autor de mapas, foi uma das principais personagens na história do Vinho do Porto.

            As ancestrais Caves Offley oferecem aos seus visitantes uma experiência inigualável onde a calma e o silêncio imperam.'
        ]);

        $sight3->categories()->attach([3]);

        $sight4 = Sight::create([
            'name' => 'Livraria Lello',
            'city_id' => 1,
            'latitude' => '41.14685',
            'longitude' => '-8.614825',
            'description' => 'A Livraria Lello e Irmão, também conhecida como Livraria Chardron ou simplesmente Livraria Lello, situa-se na Rua das Carmelitas 144, na freguesia da Vitória da cidade do Porto, em Portugal.

Em virtude do seu ímpar valor histórico e artístico, a Lello tem sido reconhecida como uma das mais belas livrarias do mundo por diversas personalidades e entidades, casos do escritor espanhol Enrique Vila-Matas, do jornal britânico The Guardian e da editora australiana de guias de viagens Lonely Planet.'
        ]);

        $sight4->categories()->attach([7]);

        $sight5 = Sight::create([
            'name' => 'Capela das Almas',
            'city_id' => 1,
            'latitude' => '41.149858',
            'longitude' => '-8.605556',
            'description' => 'A Capela da Almas ou Capela de Santa Catarina é uma capela situada na freguesia de Santo Ildefonso, na cidade do Porto, em Portugal.

A sua construção data dos princípios do séc. XVIII.

A capela tem dois corpos, sendo o segundo mais baixo, e sofreu obras de ampliação e restauro que modificaram o estilo original, em 1801.'
        ]);

        $sight5->categories()->attach([1]);

        $sight6 = Sight::create([
            'name' => 'Museu Municipal Amadeo de Souza-Cardoso',
            'city_id' => 1,
            'latitude' => '41.269641',
            'longitude' => '-8.078556',
            'description' => 'Amadeo de Souza-Cardoso (Manhufe, freguesia de Mancelos, Amarante, 14 de Novembro de 1887 – Espinho, 25 de Outubro de 1918) foi um pintor português.

Pertencente à primeira geração de pintores modernistas portugueses , Amadeo de Souza-Cardoso destaca-se entre todos eles pela qualidade excecional da sua obra e pelo diálogo que estabeleceu com as vanguardas históricas do início do século XX. "O artista desenvolveu, entre Paris e Manhufe, a mais séria possibilidade de arte moderna em Portugal num diálogo internacional, intenso mas pouco conhecido, com os artistas do seu tempo".'
        ]);

        $sight6->categories()->attach([5]);


    }

} 