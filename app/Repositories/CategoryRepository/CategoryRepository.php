<?php
namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use Illuminate\Database\Eloquent\Model;


class CategoryRepository extends BaseRepository implements ICategoryRepository {
    
    public function __construct(Categories $model) {
        parent::__construct($model);
    }

    public function updateByID($id, Categories $newCategory)
    {
        $category = Categories::find($id);

        $category->name = $newCategory->name;

        $category->save();
    }

    public function create(Model $model) {
        $model->save();
    }

}