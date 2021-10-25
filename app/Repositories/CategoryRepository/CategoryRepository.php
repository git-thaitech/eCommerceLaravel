<?php

use App\Models\Categories;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ICategoryRepository;

class CategoryRepository extends BaseRepository implements ICategoryRepository {
    public function createNewCategory(Categories $category)
    {
        //Insert a new category to database based on the $category paramentor.
    }

    public function updateCategoryByID($id, Categories $category)
    {
        //Update a category by ID and Cat
    }

}