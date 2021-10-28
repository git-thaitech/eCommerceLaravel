<?php
namespace App\Services\CategoryService;

use App\Repositories\CategoryRepository\ICategoryRepository;
use App\Services\BaseService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoryService extends BaseService implements ICategoryService {

    private ICategoryRepository $categoryRepository;

    public function __construct(ICategoryRepository $categoryRepository) {
        parent::__construct($categoryRepository);
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @inheriate from BaseService
     */
    public function updateByID(Request $request) {

        $this->categoryRepository->updateByID($request->id,['name' => $request->name]);
    }

    public function create(Request $request) {
        $attribute = ['name' => $request->name];

        //dd($attribute);
        $this->getCategoryRepository()->create($attribute);
        // $this->parent::create($attribute);
    }

    public function getCategoryRepository() {
        return $this->categoryRepository;
    }

    public function setCategoryRepository($categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }
}