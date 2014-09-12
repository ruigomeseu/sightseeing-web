<?php namespace Sightseeing\Transformers; 

use League\Fractal\TransformerAbstract;
use Sightseeing\Category;

class CategoryTransformer extends TransformerAbstract {

    public function transform(Category $category)
    {
        return [
            'id' => (int) $category->id,
            'name' => $category->name
        ];
    }

} 