<?php

namespace App\Repositories\Blogs;

use App\Models\Blogs;
use App\Repositories\Base\BaseEloquentRepository;

class BlogsEloquentRepository extends BaseEloquentRepository implements BlogsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Blogs::class;
    }

    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished()
    {
        $result = $this->model
            ->whereDate('publish_date', '=<', date('Y-m-d H:i:s'))
            ->whereDate('end_date', '>=', date('Y-m-d H:i:s'))
            ->get();

        return $result;
    }

    /**
     * Get post only published
     * @param $id int Post ID
     * @return mixed
     */
    public function findOnlyPublished($id)
    {
        $result = $this->model
            ->where('id', $id)
            ->whereDate('publish_date', '=<', date('Y-m-d H:i:s'))
            ->whereDate('end_date', '>=', date('Y-m-d H:i:s'))
            ->first();

        return $result;
    }

    /**
     * Find by slug
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug)
    {
        $result = $this->model->where('slug', $slug)->first();
        return $result;
    }
}
