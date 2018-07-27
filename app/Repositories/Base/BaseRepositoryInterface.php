<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    /**
     * Get first data base on order
     * @param $orderBy
     * @return mixed
     */
    public function getFirst($orderBy);

    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get all with paginate
     * @return mixed
     */
    public function getAllPaginate($limit);

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}