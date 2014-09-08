<?php namespace Sightseeing\Transformers; 

use League\Fractal\TransformerAbstract;
use Sightseeing\Country;

class CountryTransformer extends TransformerAbstract {

    protected $availableIncludes = [
        'cities'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @param Country $country
     * @return array
     */
    public function transform(Country $country)
    {
        return [
            'id'       => (int) $country->id,
            'name'     => $country->name,
            'flag_image' => $country->flag_image,

            'links'    => [
                [
                    'rel' => 'self',
                    'uri' => '/countries/' . $country->id,
                ],
                [
                    'rel' => 'countries.cities',
                    'uri' => '/countries/' . $country->id . '/cities',
                ],
            ],
        ];
    }

    public function includeCities(Country $country)
    {
        $cities = $country->cities;

        return $this->collection($cities, new CityTransformer);
    }

} 