<?php
namespace App\Services\CategoryService;

use App\Repositories\CategoryRepository\CategoryRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;

class CategoryService extends BaseService implements ICategoryService {

    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        parent::__construct($categoryRepository);
    }


    /**
     * @inheriate from BaseService
     */
    public function create(Request $request) {
        // $category = new Categories();

        // $category->name = $request->name;

        // $this->categoryRepository->model=$category;

        $this->categoryRepository->updateByID($request->id,['name' => $request->name]);
    }
}