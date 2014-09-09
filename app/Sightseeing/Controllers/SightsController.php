<?php namespace Sightseeing\Controllers; 

use Sightseeing\Repositories\Sight\SightRepository;

class SightsController extends BaseController {

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

} 