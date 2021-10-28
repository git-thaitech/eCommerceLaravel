<?php
namespace App\Services;

use App\Models\Categories;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class Category extends BaseService implements ICategoryService {

    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        parent::__construct($categoryRepository);
    }


    public function create(Request $request) {
        // $category = new Categories();

        // $category->name = $request->name;

        // $this->categoryRepository->model=$category;

        $this->categoryRepository->updateByID($request->id,['name' => $request->name]);
    }
}