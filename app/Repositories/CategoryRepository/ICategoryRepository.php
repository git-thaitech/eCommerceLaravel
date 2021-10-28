<?php

namespace App\Repositories\CategoryRepository;

use App\Models\Categories;
use App\Repositories\IBaseRepository;

interface ICategoryRepository extends IBaseRepository {
    public function updateByID($id, array $attributes);
}