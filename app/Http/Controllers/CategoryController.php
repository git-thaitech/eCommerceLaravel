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
     * @return View
     */
    public function index() {
        $categoryRecords = $this->getCategoryService()->getAll();
        // dd(compact($categoryRecords));
        // return view('Admin.category.index', ["categoryRecords" => $categoryRecords]);
        // dd(compact('categoryRecords'));
        return view('Admin.category.index', compact('categoryRecords'));
    }


    /**
     * @return View
     */
    public function create() {
        return view('Admin.category.create');
    }   

    public function store() {

    }


    /**
     * GET - SET function for $categoryService
     */
    protected function getCategoryService():ICategoryService {
        return $this->categoryService;
    }

    protected function setCategoryService($categoryService) {
        $this->categoryService = $categoryService;
    }
}
