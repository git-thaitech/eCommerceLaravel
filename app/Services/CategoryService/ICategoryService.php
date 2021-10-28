<?php
namespace App\Services\CategoryService;

use App\Services\IBaseService;
use Illuminate\Http\Request;

interface ICategoryService extends IBaseService{
    public function updateByID(Request $request);
}