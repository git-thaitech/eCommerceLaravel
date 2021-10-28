<?php

namespace App\Repositories\Interfaces;

use App\Models\Categories;

interface ICategoryRepository {
    public function updateByID($id, array $attributes);
}