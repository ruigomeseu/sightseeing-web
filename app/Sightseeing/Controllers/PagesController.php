<?php namespace Sightseeing\Controllers; 

use Sightseeing\Repositories\Sight\SightRepository;

class PagesController extends BaseController {

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
        return \View::make('pages.index');
    }

    public function share($id)
    {
        $sight = $this->sightRepository->getById($id);

        return \View::make('pages.share')
            ->with('sight', $sight);
    }

} 