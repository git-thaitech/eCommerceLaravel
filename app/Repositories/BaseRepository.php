<?php

namespace App\Repositories;

use App\Repositories\IBaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
abstract class BaseRepository implements IBaseRepository {

    /**
     * @var $model
     */
    protected Model $model;

    public function __construct(Model $model)
    {
       $this->model = $model; 
    }


    /**
     * Get all records
     * @return Collection
     */
    public function getAll():Collection {
        return $this->model::all();
    }


    /**
     * @param $id
     * @return Model
     */
    public function getByID(int $id): ?Model
    {
        return $this->model::Where('id',$id)->first();
    }

    
    /**
     * @param $id
     * @return void
     */
    public function delete(int $id)
    {
        $this->model::findId($id)->delete();
    }


    abstract public function create(array $attribute);

}