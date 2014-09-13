<?php namespace Sightseeing\Controllers\Api;

use Carbon\Carbon;
use Elasticsearch\Client;
use Input;
use Sightseeing\Repositories\Sight\SightRepository;

class SuggestionsController extends ApiController
{

    /**
     * @var SightRepository
     */
    private $sightRepository;

    function __construct(SightRepository $sightRepository)
    {
        $this->sightRepository = $sightRepository;
    }

    public function create()
    {
        $elasticsearch = new Client();

        $sight = $this->sightRepository->getById(Input::get('sight_id'));

        $time = Carbon::now($sight->city->timezone)->hour;

        $searchQuery['index'] = 'sightseeing';
        $searchQuery['type'] = 'sight';

        $searchQuery['body'] = [
            'min_score' => 0.0001,
            'query'     => [
                'function_score' => [
                    'query'     => [
                        'bool' => [
                            'must'   => [
                                0 => ['range' => [
                                    'cost' => [
                                        'lte' => Input::get('cost')
                                    ]
                                ]
                                ]
                            ],
                            'should' => [
                                0 => ['range' => [
                                    'closing_hours' => [
                                        'gte' => $time
                                    ]
                                ]
                                ],
                                1 => ['range' => [
                                    'opening_hours' => [
                                        'lte' => $time
                                    ]
                                ]
                                ]
                            ]
                        ]
                    ],
                    'functions' => [
                        0 => [
                            'gauss' => [
                                'location' => [
                                    'origin' => $sight->latitude . ',' . $sight->longitude,
                                    'offset' => '0.5km',
                                    'scale'  => '0.1km',
                                    'decay'  => 0.33
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $suggestions = $elasticsearch->search($searchQuery);

        $filteredSuggestions = array();
        $filteredSuggestions['data'] = [];

        foreach ($suggestions['hits']['hits'] as $suggestion) {
            $suggestionAdded = false;
            foreach ($suggestion['_source']['categories'] as $category) {
                if (in_array($category['id'], Input::get('categories')) && !$suggestionAdded && $suggestion['_id'] != Input::get('sight_id')) {
                    $filteredSuggestions['data'][] = [
                        'id' => $suggestion['_id'],
                        'score' => $suggestion['_score']
                    ];
                    $suggestionAdded = true;
                }
            }
        }

        $maxScore = 0;


        foreach($filteredSuggestions['data'] as $suggestion)
        {
            if($suggestion['score'] > $maxScore)
            {
                $maxScore = $suggestion['score'];
            }
        }

        $filteredSuggestions['max_score'] = $maxScore;

        return $filteredSuggestions;
    }

} 