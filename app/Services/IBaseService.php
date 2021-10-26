<?php

namespace App\Services;

use Illuminate\Http\Request;

interface IBaseService
{
    public function getAll();
    public function getByID($id);
    public function delete($id);
    public function create(Request $request);
}
