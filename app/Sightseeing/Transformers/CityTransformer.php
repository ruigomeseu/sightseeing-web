<?php namespace Sightseeing\Transformers;

use League\Fractal\TransformerAbstract;
use Sightseeing\City;

class CityTransformer extends TransformerAbstract
{

    protected $availableIncludes = [
        'sights'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @param City $city
     * @return array
     */
    public function transform(City $city)
    {
        return [
            'id'       => (int) $city->id,
            'name'     => $city->name,
            'timezone' => $city->timezone,

            'links'    => [
                [
                    'rel' => 'self',
                    'uri' => '/cities/' . $city->id,
                ],
                [
                    'rel' => 'cities.sights',
                    'uri' => '/cities/' . $city->id . '/sights',
                ],
            ],
        ];
    }

    public function includeSights(City $city)
    {
        $sights = $city->sights;

        return $this->collection($sights, new SightTransformer);
    }

}