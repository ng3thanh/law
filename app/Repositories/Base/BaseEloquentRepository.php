<?php

namespace App\Repositories\Base;

abstract class BaseEloquentRepository implements BaseRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get first data base on order
     * @param $orderBy
     * @return mixed
     */
    public function getDataOrderBy($orderBy){
        return $this->model->orderBy($orderBy);
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get all with paginate
     * @return mixed
     */
    public function getAllPaginate($limit)
    {
        return $this->model->paginate($limit);
    }

    /**
     * Get random data
     * @param $number
     * @return mixed
     */
    public function getSomeRandomData($number)
    {
        return $this->model->inRandomOrder()->limit($number)->get();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    /**
     * Get one with trash
     * @param $id
     * @return mixed
     */
    public function findWithTrash($id)
    {
        $result = $this->model->withTrashed()->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
    }
}
