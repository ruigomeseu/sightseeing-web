<?php namespace Sightseeing\Repositories\Sight; 

use Sightseeing\Repositories\AbstractEloquentRepository;
use Sightseeing\Sight;
use Sightseeing\SightImage;

class EloquentSightRepository extends AbstractEloquentRepository implements SightRepository {

    protected $model;

    function __construct(Sight $model)
    {
        $this->model = $model;
    }

    function updateById($id, $data)
    {
        $sight = $this->model->findOrFail($id);

        $sight->name = $data['name'];

        $sight->description = $data['description'];

        $sight->save();
    }


    function addImageById($id, $imagePath)
    {
        $sight = $this->model->findOrFail($id);

        $image = new SightImage();

        $image->path = $imagePath;

        $sight->images()->save($image);
    }

    function getImageById($imageId)
    {
        return SightImage::findOrFail($imageId);
    }

    function deleteImageById($imageId)
    {
        $image = SightImage::findOrFail($imageId);

        $image->delete();
    }
}