<?php namespace Sightseeing\Transformers; 

use League\Fractal\TransformerAbstract;
use Sightseeing\Beacon;

class BeaconTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @param Beacon $beacon
     * @return array
     */
    public function transform(Beacon $beacon)
    {
        return [
            'id'       => (int) $beacon->id,
            'name'     => $beacon->name,
            'major_id' => (int) $beacon->major,
            'minor_id' => (int) $beacon->minor,
            'installed_at' => $beacon->installed_at,

            'links'    => [
                [
                    'rel' => 'self',
                    'uri' => '/beacons/' . $beacon->id,
                ]
            ],
        ];
    }

} 