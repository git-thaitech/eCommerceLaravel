<?php

namespace App\Repositories\Interfaces;

interface IBaseRepository {
    public function getAll();
    public function getElementByID(int $id);
    public function deleteElementByID(int $id);
}