<?php namespace Sightseeing\Transformers;

use League\Fractal\TransformerAbstract;
use Sightseeing\Sight;

class SightTransformer extends TransformerAbstract
{

    protected $availableIncludes = [
        'beacons',
        'categories',
        'images'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @param Sight $sight
     * @return array
     */
    public function transform(Sight $sight)
    {
        return [
            'id'          => (int)$sight->id,
            'name'        => $sight->name,
            'description' => $sight->description,
            'image'       => $sight->image,
            'links'       => [
                [
                    'rel' => 'self',
                    'uri' => '/sights/' . $sight->id,
                ]
            ],
        ];
    }

    public function includeBeacons(Sight $sight)
    {
        $beacons = $sight->beacons;

        return $this->collection($beacons, new BeaconTransformer);
    }

    public function includeImages(Sight $sight)
    {
        $images = $sight->images;

        return $this->collection($images, new ImageTransformer);
    }

    public function includeCategories(Sight $sight)
    {
        $categories = $sight->categories;

        return $this->collection($categories, new CategoryTransformer);
    }

} 