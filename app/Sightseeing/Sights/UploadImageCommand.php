<?php namespace Sightseeing\Sights; 

class UploadImageCommand {

    public $image;

    function __construct($image)
    {
        $this->image = $image;
    }

} 