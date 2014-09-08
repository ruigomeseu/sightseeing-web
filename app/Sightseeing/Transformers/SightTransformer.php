<?php namespace Sightseeing\Transformers;

use League\Fractal\TransformerAbstract;
use Sightseeing\Sight;

class SightTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
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

} 