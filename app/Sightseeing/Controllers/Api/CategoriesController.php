<?php namespace Sightseeing\Controllers\Api; 

use League\Fractal\Manager;
use Sightseeing\Repositories\Category\CategoryRepository;
use Sightseeing\Transformers\CategoryTransformer;

class CategoriesController extends ApiController {

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    function __construct(CategoryRepository $categoryRepository, Manager $manager)
    {
        parent::__construct($manager);
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return $this->respondWithCollection($categories, new CategoryTransformer);
    }

} 