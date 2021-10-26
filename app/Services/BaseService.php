<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\IBaseRepository;

abstract class BaseService implements IBaseService
{
    protected IBaseRepository $repository;

    public function __contruct(IBaseRepository $repository) {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
    
    public function getByID($id)
    {
        return $this->repository->getByID($id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    abstract public function create(Request $request);
}
