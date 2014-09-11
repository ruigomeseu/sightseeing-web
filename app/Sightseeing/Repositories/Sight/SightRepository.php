<?php namespace Sightseeing\Repositories\Sight; 

interface SightRepository {

    function getAll();
    function getById($id);
    function updateById($id, $data);
    function addImageById($id, $imagePath);
    function getImageById($imageId);
    function deleteImageById($imageId);

} 