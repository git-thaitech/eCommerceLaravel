<?php
namespace App\Services\ProductService;

use App\Services\IBaseService;
use Illuminate\Http\Request;

interface IProductService extends IBaseService {
    public function updateByID(Request $request);
}
?>