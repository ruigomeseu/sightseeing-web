<?php namespace Sightseeing\Sights; 

class DeleteImageCommand {

    public $imageId;

    function __construct($imageId)
    {
        $this->imageId = $imageId;
    }

}