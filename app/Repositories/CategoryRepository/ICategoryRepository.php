<?php

namespace App\Repositories\CategoryRepository;

use App\Models\Categories;

interface ICategoryRepository {
    public function updateByID($id, array $attributes);
}