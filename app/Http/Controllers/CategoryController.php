<?php

namespace App\Http\Controllers;

use App\Services\CategoryService\ICategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected ICategoryService $categoryService;

    public function __construct(ICategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Get all category records
     * 
     * @return View|array $categoryRecords
     */
    public function index()
    {
        $categoryRecords = $this->getCategoryService()->getAll();
        return view('Admin.category.index', compact('categoryRecords'));
    }


    /**
     * Load create form with GET method, create new records with POST method
     * 
     * @param Illuminate\Http\Request $request
     * @return View
     */
    public function create(Request $request)
    {

        if ($request->method() == "GET")
            return view('Admin.category.create');

        $this->getCategoryService()->create($request);
        return redirect()->back()->with('success', 'Insert a new record successfully!');
    }


    /**
     * GET - SET function for $categoryService
     */
    protected function getCategoryService(): ICategoryService
    {
        return $this->categoryService;
    }

    protected function setCategoryService($categoryService)
    {
        $this->categoryService = $categoryService;
    }
}
