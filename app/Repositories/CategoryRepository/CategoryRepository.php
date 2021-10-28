<?php
namespace App\Repositories\CategoryRepository;

use App\Models\Category;
use App\Repositories\BaseRepository;
use App\Repositories\CategoryRepository\ICategoryRepository;
use Attribute;
use Illuminate\Database\Eloquent\Model;


class CategoryRepository extends BaseRepository implements ICategoryRepository {
    
    public function __construct(Category $model) {
        parent::__construct($model);
    }

    public function updateByID($id, array $attributes): ?Model
    {
        $model = $this->getByID($id);
        if ($model) {
            $model->update($attributes);
            // $model = $model->load($relations);
        }
        return $model;
    }

    public function create(array $attributes) {
    
        $this->model->create($attributes);
    }

}