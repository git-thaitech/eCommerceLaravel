<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    private $htmlSelect;

    public function __construct()
    {
        $this->htmlSelect = '';
    }

    public function create()
    {
        $htmlOption = $this->categoriesRecursion(0);
        //return view('category.add', compact($htmlOption));

        return View::make('category.add')->with(compact('htmlOption'));
    }

    public function categoriesRecursion($id = 0, $text = '')
    {
        $data = Categories::all();

        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .= "<option>" . $text . $value['name'] . "</option>";

                $this->categoriesRecursion($value['id'], $text . '---');
            }
        }

        return $this->htmlSelect;
    }

    public function index()
    {
        return view('category.index');
    }
}
