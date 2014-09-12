<?php namespace Sightseeing\Transformers; 

use League\Fractal\TransformerAbstract;
use Sightseeing\SightImage;

class ImageTransformer extends TransformerAbstract {

    public function transform(SightImage $sightImage)
    {
        return [
            'id' => (int) $sightImage->id,
            'path' => 'http://s3.amazonaws.com/sightseeing.io/' . $sightImage->path
        ];
    }

} 