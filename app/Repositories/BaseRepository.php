<?php

namespace App\Repositories;


use App\Repositories\Interfaces\IBaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository implements IBaseRepository {


    /**
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
       $this->$model = $model; 
    }



    public function getAll() {
        //Access database and get all elements
    }


    /**
     * @param $id
     * return model
     */
    public function getElementByID(int $id)
    {
        return $this->model->where('id', $id)->first();
    }

    /**
     * @param $id
     */
    public function deleteElementByID(int $id)
    {
        //Delete element by ID
    }

}