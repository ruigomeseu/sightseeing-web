<?php

use Sightseeing\Sight;

class SightSeeder extends DatabaseSeeder
{

    public function run()
    {
        $client = new \Elasticsearch\Client();

        $sightsCreated = array();

        $sight = Sight::create([
            'name'          => 'Torre dos Clérigos',
            'cost'          => 3,
            'opening_hours' => 9,
            'closing_hours' => 19,
            'city_id'       => 1,
            'latitude'      => '41.145675',
            'longitude'     => '-8.614599',
            'description'   => 'A Torre dos Clérigos é uma torre sineira que faz parte da Igreja dos Clérigos e está situada na cidade do Porto, Portugal. É um monumento considerado por muitos o ex libris da cidade do Porto.

A torre foi construída entre 1754 e 1763 com projecto do italiano Nicolau Nasoni sob encomenda de Dom Jerónimo de Távora Noronha Leme e Cernache a pedido da Irmandade dos Clérigos Pobres. O seu arquitecto, Nicolau Nasoni, contribuiu durante muitos anos para a construção da grande torre dos clérigos sem receber nada em troca e só alguns anos depois isso aconteceu.

Está classificada pelo IPPAR como Monumento Nacional desde 1910.

A torre, se bem que mais considerada pelos habitantes do Porto, foi a última construção do conjunto dos Clérigos, dos quais fazem parte a igreja e uma enfermaria. Foi iniciada em 1732, tendo em conta o aproveito do terreno que sobrara para a instalação da enfermaria dos Clérigos. O projeto inicial de Nasoni previa a construção de duas torres, e não apenas de uma. A torre é decorada segundo o estilo barroco, com esculturas de santos, fogaréus, cornijas bem acentuadas e balaustradas.

Tem seis andares e 75 metros de altura, que se sobem por uma escada em espiral com 240 degraus. Era, na altura da sua construção, o edifício mais alto de Portugal.

No primeiro andar apresenta uma porta encimada pela imagem de São Paulo, tendo por debaixo, inserido num medalhão, um texto de São Paulo, na Carta aos Romanos. A espessura das paredes do primeiro andar, em granito, chega a atingir os dois metros. Destacam-se as janelas abalaustradas do último andar, mais comprimido e decorado, e os quatro mostradores de relógio.

Os materiais utilizados na construção da Torre dos Clérigos foram, principalmente, o granito e o mármore.',
        ]);

        $sight->categories()->attach([1, 4]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Funicular dos Guindais',
            'cost'          => 2,
            'opening_hours' => 8,
            'closing_hours' => 20,
            'city_id'       => 1,
            'latitude'      => '41.140944',
            'longitude'     => '-8.6095',
            'description'   => 'O Funicular dos Guindais é uma ferrovia ligeira que se localiza na cidade do Porto, em Portugal, e liga a Batalha (Rua Augusto Rosa) à Ribeira (Av. Gustave Eiffel). É operado pelo Metro do Porto.

Desde a sua inauguração, em fevereiro de 2004, até outubro de 2013 já transportou cerca de 3,7 milhões de pessoas.',
        ]);

        $sight->categories()->attach([6]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Sandeman',
            'city_id'       => 1,
            'opening_hours' => 10,
            'closing_hours' => 18,
            'cost'          => 5,
            'latitude'      => '41.137649',
            'longitude'     => '-8.612400',
            'description'   => 'Criada em 1737 por William Offley, a empresa ganhou renome e prestígio internacional sob a direção de Joseph James Forrester, uma personagem marcante da história do Vinho do Porto, distinguido com o título de Barão pelo Rei de Portugal.

            O Barão de Forrester, um homem de negócios, enólogo, respeitado provador de vinhos, artista e autor de mapas, foi uma das principais personagens na história do Vinho do Porto.

            As ancestrais Caves Offley oferecem aos seus visitantes uma experiência inigualável onde a calma e o silêncio imperam.'
        ]);

        $sight->categories()->attach([3]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Livraria Lello',
            'city_id'       => 1,
            'cost'          => 0,
            'opening_hours' => 10,
            'closing_hours' => 19,
            'latitude'      => '41.14685',
            'longitude'     => '-8.614825',
            'description'   => 'A Livraria Lello e Irmão, também conhecida como Livraria Chardron ou simplesmente Livraria Lello, situa-se na Rua das Carmelitas 144, na freguesia da Vitória da cidade do Porto, em Portugal.

Em virtude do seu ímpar valor histórico e artístico, a Lello tem sido reconhecida como uma das mais belas livrarias do mundo por diversas personalidades e entidades, casos do escritor espanhol Enrique Vila-Matas, do jornal britânico The Guardian e da editora australiana de guias de viagens Lonely Planet.'
        ]);

        $sight->categories()->attach([7]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Capela das Almas',
            'cost'          => 0,
            'opening_hours' => 8,
            'closing_hours' => 19,
            'city_id'       => 1,
            'latitude'      => '41.149858',
            'longitude'     => '-8.605556',
            'description'   => 'A Capela da Almas ou Capela de Santa Catarina é uma capela situada na freguesia de Santo Ildefonso, na cidade do Porto, em Portugal.

A sua construção data dos princípios do séc. XVIII.

A capela tem dois corpos, sendo o segundo mais baixo, e sofreu obras de ampliação e restauro que modificaram o estilo original, em 1801.'
        ]);

        $sight->categories()->attach([1]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Museu Municipal Amadeo de Souza-Cardoso',
            'cost'          => 1,
            'opening_hours' => 10,
            'closing_hours' => 18,
            'city_id'       => 1,
            'latitude'      => '41.269641',
            'longitude'     => '-8.078556',
            'description'   => 'Amadeo de Souza-Cardoso (Manhufe, freguesia de Mancelos, Amarante, 14 de Novembro de 1887 – Espinho, 25 de Outubro de 1918) foi um pintor português.

Pertencente à primeira geração de pintores modernistas portugueses , Amadeo de Souza-Cardoso destaca-se entre todos eles pela qualidade excecional da sua obra e pelo diálogo que estabeleceu com as vanguardas históricas do início do século XX. "O artista desenvolveu, entre Paris e Manhufe, a mais séria possibilidade de arte moderna em Portugal num diálogo internacional, intenso mas pouco conhecido, com os artistas do seu tempo".'
        ]);

        $sight->categories()->attach([5]);

        $sightsCreated[] = $sight;

        $sight = Sight::create([
            'name'          => 'Coliseu do Porto',
            'cost'          => 0,
            'opening_hours' => 13,
            'closing_hours' => 21,
            'city_id'       => 1,
            'latitude'      => '41.146818',
            'longitude'     => '-8.605492',
            'description'   => 'O Coliseu do Porto é uma sala de espectáculos localizada na cidade do Porto, em Portugal.

O edifício foi classificado como monumento de interesse público pela Portaria n.º 637/2012, de 2 de Novembro de 2012, publicada em Diário da República.'
        ]);

        $sight->categories()->attach([7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Maus Hábitos',
            'cost'          => 0,
            'opening_hours' => 12,
            'closing_hours' => 2,
            'city_id'       => 1,
            'latitude'      => '41.1467355',
            'longitude'     => '-8.6055741',
            'description'   => 'É um espaço informal de fruição criativa e de encontro de públicos heterogéneos.

A creative and informal space of creative use and meeting point of heterogeneous publics.'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Café Restaurante Guarany',
            'cost'          => 0,
            'opening_hours' => 9,
            'closing_hours' => 23,
            'city_id'       => 1,
            'latitude'      => '41.1477601',
            'longitude'     => '-8.6114781',
            'description'   => 'O Café Guarany é um restaurante e café histórico localizado na Avenida dos Aliados, em plena Baixa da cidade do Porto, em Portugal.

Integrado num surto de abertura de cafés no Porto na década de 1930, a 29 de Janeiro de 19334 foi inaugurado o Café Guarany, projecto do arquitecto Rogério de Azevedo com decoração do escultor Henrique Moreira.

Espaço de convívio, tertúlias e cultura desde a sua fundação, em 2003 o Guarany foi totalmente restaurado, buscando um compromisso entre a tradição e a qualidade de serviço. Uma das paredes passou a ostentar pinturas de Graça Morais.'
        ]);

        $sight->categories()->attach([8]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Câmara Municipal do Porto',
            'cost'          => 0,
            'opening_hours' => 0,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.149728',
            'longitude'     => '-8.6113189',
            'description'   => 'O Café Guarany é um restaurante e café histórico1 localizado na Avenida dos Aliados, em plena Baixa da cidade do Porto, em Portugal.

Integrado num surto de abertura de cafés no Porto na década de 1930, a 29 de Janeiro de 19334 foi inaugurado o Café Guarany, projecto do arquitecto Rogério de Azevedo com decoração do escultor Henrique Moreira.

Espaço de convívio, tertúlias e cultura desde a sua fundação, em 2003 o Guarany foi totalmente restaurado, buscando um compromisso entre a tradição e a qualidade de serviço. Uma das paredes passou a ostentar pinturas de Graça Morais.'
        ]);

        $sight->categories()->attach([6]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Armazem do Chá',
            'cost'          => 0,
            'opening_hours' => 21,
            'closing_hours' => 23,
            'city_id'       => 1,
            'latitude'      => '41.1494999',
            'longitude'     => '-8.6140738',
            'description'   => 'Armazem do Chá'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Teatro Sá da Bandeira',
            'cost'          => 0,
            'opening_hours' => 0,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.1468883',
            'longitude'     => '-8.6088661',
            'description'   => 'O Teatro de Sá da Bandeira é um dos teatros mais conhecidos da cidade do Porto, Portugal localizando-se perto da Praça da Liberdade, numa rua com o mesmo nome.'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Museu do Vinho do Porto',
            'cost'          => 2,
            'opening_hours' => 10,
            'closing_hours' => 18,
            'city_id'       => 1,
            'latitude'      => '41.144751',
            'longitude'     => '-8.6269760',
            'description'   => 'Situado num armazém do séc. XVIII, dos Vinhos da Companhia Geral da Agricultura da Vinhas do Alto Douro, pretende assumir-se como centro de informação do Vinho do Porto, motivando os visitantes à descoberta da história comercial da cidade relacionando-a com o vinho de renome mundial.'
        ]);

        $sight->categories()->attach([5, 3]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Casa da Rua da Reboleira',
            'cost'          => 0,
            'opening_hours' => 0,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.1402887',
            'longitude'     => '-8.6154910',
            'description'   => 'Interessante exemplar da arquitectura civil dos finais da Idade Média. É um dos maiores edifícios da zona e contém elementos de várias épocas. Ao nível da cave vêem-se estruturas medievais que poderão remontar ao século XIV. A fachada da rua da Reboleira mantém ainda no rés-do-chão os portais góticos. Os andares superiores foram transformados, possivelmente no século XVII, assim como o próprio coroamento das ameias.'
        ]);

        $sight->categories()->attach([7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Lado B',
            'cost'          => 0,
            'opening_hours' => 0,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.1466574',
            'longitude'     => '-8.6054355',
            'description'   => 'Desde a abertura do Lado B, houve o propósito de apostar na dignificação e promoção do prato da Francesinha, enquanto elemento identitário da gastronomia e da cultura da cidade do Porto. Volvidos dois anos de afincado trabalho no apuramento da receita, e depois de verificada a sua qualidade por clientes e profissionais da área, decidimos dar o passo de registar a marca «A Melhor Francesinha do Mundo». Mais do que a marca de uma empresa ou de um espaço em particular, pretendemos que seja a marca de toda uma cultura, ligada de forma umbilical à cidade do Porto, mas aberta ao resto mundo.'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Era uma vez em Paris',
            'cost'          => 0,
            'opening_hours' => 11,
            'closing_hours' => 23,
            'city_id'       => 1,
            'latitude'      => '41.1475197',
            'longitude'     => '-8.6140857',
            'description'   => 'Era uma vez em Paris… é assim que começa uma nova história, numa Paris com lugar no Porto, distante da sabida cidade do amor, das luzes, das boinas, distante daquela que está geográfica e romanticamente colocada mais perto do coração da Europa.

Ora, para os mais atentos, e em jeito de alerta, para os mais desatentos, o Era uma vez em Paris… é a continuação de uma viagem que começou no Era uma vez no Porto…, este lugar, que (já) tantas histórias tem para contar, algumas em jeito de sussurro, outras em tom de conversa, catalogada, convencionalmente, regular e outras entusiasticamente gritadas.

Era uma vez em Paris… pretende ser um espaço intemporal, mostrar que o mundo, afinal, é pequeno e que o ser humano e os ambientes apesar de serem únicos, também podem, em determinadas posições, ser transversais e bastante iguais.'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Café au Lait',
            'cost'          => 0,
            'opening_hours' => 21,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.147037',
            'longitude'     => '-8.6143577',
            'description'   => 'Café au lait é um charmoso café situado na baixa do Porto, no nr 46 da Rua Galeria de Paris, na zona dos Clérigos.

Um espaço com internet sem fios.'
        ]);

        $sight->categories()->attach([2, 7]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Sé do Porto',
            'cost'          => 3,
            'opening_hours' => 9,
            'closing_hours' => 18,
            'city_id'       => 1,
            'latitude'      => '41.1404225',
            'longitude'     => '-8.6146040',
            'description'   => 'A Sé Catedral da cidade do Porto, situada no coração do centro histórico da cidade do Porto, é um dos principais e mais antigos monumentos de Portugal.'
        ]);

        $sight->categories()->attach([1, 6]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Igreja da Misericórdia do Porto',
            'cost'          => 0,
            'opening_hours' => 9,
            'closing_hours' => 18,
            'city_id'       => 1,
            'latitude'      => '41.1436333',
            'longitude'     => '-8.6143185',
            'description'   => 'A Igreja da Misericórdia do Porto situa-se na Rua das Flores, na cidade do Porto, tendo sido construída inicialmente em 1559 de estilo renascentista com reminiscências góticas, desta igreja só se aproveitou a capela-mor, em virtude de um relâmpago que terá destruído a fachada em Abril de 1621.'
        ]);

        $sight->categories()->attach([1, 6]);

        $sightsCreated[] = $sight;


        $sight = Sight::create([
            'name'          => 'Estação de S.Bento',
            'cost'          => 0,
            'opening_hours' => 0,
            'closing_hours' => 24,
            'city_id'       => 1,
            'latitude'      => '41.145592',
            'longitude'     => '-8.610572',
            'description'   => 'A Estação Ferroviária de Porto - São Bento, igualmente denominada de Estação de São Bento, e originalmente como Estação Central do Porto, é uma interface de caminhos de ferro, que serve a cidade do Porto, em Portugal; embora tenha entrado ao serviço no dia 7 de Novembro de 1896, só em 5 de Outubro de 1916 é que se deu a inauguração oficial. Está situada na Praça de Almeida Garret, na cidade do Porto, tendo o edifício da Estação, de influência francesa, sido delineado pelo arquitecto portuense José Marques da Silva'
        ]);

        $sight->categories()->attach([7, 8]);

        $sightsCreated[] = $sight;

        foreach ($sightsCreated as $sight) {
            $client->index([
                'index' => 'sightseeing',
                'type'  => 'sight',
                'id'    => $sight->id,
                'body'  => [
                    'name'          => $sight->name,
                    'description'   => $sight->description,
                    'cost'          => $sight->cost,
                    'opening_hours' => $sight->opening_hours,
                    'closing_hours' => $sight->closing_hours,
                    'location'      => [
                        'lat' => $sight->latitude,
                        'lon' => $sight->longitude
                    ],
                    'categories'    => $sight->categories->toArray()
                ]
            ]);
        }


    }

} 