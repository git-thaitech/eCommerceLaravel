<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface IBaseRepository
{
    public function getAll();
    public function getByID(int $id);
    public function delete(int $id);
    public function create(array $attribute);
}
