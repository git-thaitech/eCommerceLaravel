<?php
namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use Attribute;
use Illuminate\Database\Eloquent\Model;


class CategoryRepository extends BaseRepository implements ICategoryRepository {
    
    public function __construct(Categories $model) {
        parent::__construct($model);
    }

    public function updateByID($id, array $attributes): ?Model
    {
        // $category = Categories::find($id);

        // $category->name = $newCategory->name;

        // $category->save();
        $model = $this->getByID($id);
        if ($model) {
            $model->update($attributes);
            // $model = $model->load($relations);
        }
        return $model;


        // $model = $this->getByID($id);
        // if(!$model) {

        // }
        // $model->update($attribute);
    }

    public function create(array $attributes) {
    
        $this->model->create($attributes);
    }

}