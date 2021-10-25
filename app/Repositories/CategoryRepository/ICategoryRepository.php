<?php

namespace App\Repositories\Interfaces;

use App\Models\Categories;

interface ICategoryRepository {
    public function createNewCategory(Categories $category);
    public function updateCategoryByID($id, Categories $category);
}