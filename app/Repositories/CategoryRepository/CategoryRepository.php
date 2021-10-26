<?php
namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use Illuminate\Database\Eloquent\Model;


class CategoryRepository extends BaseRepository implements ICategoryRepository {
    
 

    public function updateByID($id, Categories $category)
    {
        //Update a category by ID and Category
    }

    public function create(Model $model) {
        $model->save();
    }

}