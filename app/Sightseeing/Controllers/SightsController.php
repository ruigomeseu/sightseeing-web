<?php namespace Sightseeing\Controllers; 

use Input;
use Laracasts\Commander\CommanderTrait;
use Sightseeing\Repositories\Sight\SightRepository;
use Sightseeing\Sights\DeleteImageCommand;
use Sightseeing\Sights\UploadImageCommand;

class SightsController extends BaseController {

    use CommanderTrait;

    /**
     * @var SightRepository
     */
    private $sightRepository;

    function __construct(SightRepository $sightRepository)
    {
        $this->sightRepository = $sightRepository;
    }

    public function index()
    {
        $sights = $this->sightRepository->getAll(['city', 'images']);

        return \View::make('sights.index')
            ->with('title', 'Manage Sights')
            ->with('sights', $sights);
    }

    public function show($sightId)
    {
        $sight = $this->sightRepository->getById($sightId);

        return \View::make('sights.show')
            ->with('title', 'Edit ' . $sight->name)
            ->with('sight', $sight);
    }

    public function edit($sightId)
    {
        $this->sightRepository->updateById($sightId, Input::only('name', 'description'));

        return \Redirect::back()
            ->with('message', 'This sight was successfully updated');
    }

    public function upload($sightId)
    {
        $input = array(
            'id' => $sightId,
            'image' => Input::file('image')
        );

        $this->execute(UploadImageCommand::class, $input);
    }

    public function showImage($imageId)
    {
        $image = $this->sightRepository->getImageById($imageId);

        $sight = $image->sight;

        return \View::make('sights.image')
            ->with('title', 'Editing image')
            ->with('image', $image)
            ->with('sight', $sight);
    }

    public function deleteImage($imageId)
    {
        $input = array(
            'imageId' => $imageId,
        );

        $this->execute(DeleteImageCommand::class, $input);

        return \Redirect::route('sight.index')
            ->with('message', 'Image deleted successfully');
    }

} 