<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\IBaseRepository;

abstract class BaseService implements IBaseService
{
    protected IBaseRepository $repository;

    public function __construct(IBaseRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Get all records of a table
     * 
     * @return array
     */
    public function getAll()
    {
        return $this->getRepository()->getAll();
    }

    /**
     * Send an $id to repo to get a record in a table
     * 
     * @param int $id
     * @return array|record
     */
    public function getByID($id)
    {
        return $this->repository->getByID($id);
    }

    /**
     * Send an $id to repo to get a record in a table
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function search(Request $request, $columnName, $key) {
        
    }

    abstract public function create(Request $request);

    public function getRepository() {
        return $this->repository;
    }
}
