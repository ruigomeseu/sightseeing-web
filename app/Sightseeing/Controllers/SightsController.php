<?php namespace Sightseeing\Controllers; 

use Input;
use Sightseeing\Repositories\Sight\SightRepository;
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
        $sights = $this->sightRepository->getAll(['city']);

        return \View::make('sights.index')
            ->with('title', 'All Sights')
            ->with('sights', $sights);
    }

    public function show($sightId)
    {
        $sight = $this->sightRepository->getById($sightId);

        return \View::make('sights.edit')
            ->with('title', 'Edit ' . $sight->name)
            ->with('sight', $sight);
    }

    public function edit($sightId)
    {
        $this->sightRepository->updateById($sightId, Input::only('name', 'description'));

        return \Redirect::back()
            ->with('message', 'This sight was successfully updated');
    }

    public function postUpload()
    {
        $input = Input::all();

        $file = Input::file('file');

        $this->execute(UploadImageCommand::class);


    }

} 