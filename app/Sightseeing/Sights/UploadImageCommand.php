<?php namespace Sightseeing\Sights; 

class UploadImageCommand {

    public $id;
    public $image;

    function __construct($id, $image)
    {
        $this->id = $id;
        $this->image = $image;
    }

} 