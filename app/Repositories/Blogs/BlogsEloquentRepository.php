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
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
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
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
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
        $result = $this->model
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
            ->where('slug', $slug)
            ->first();
        return $result;
    }

    public function getBlogNextDate($id, $date)
    {
        $result = $this->model->where('publish_date', '>=', $date)
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
            ->where('id', '!=', $id)
            ->first();
        return $result;
    }

    public function getBlogPreviousDate($id, $date)
    {
        $result = $this->model->where('publish_date', '<=', $date)
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
            ->where('id', '!=', $id)
            ->first();
        return $result;
    }

    public function getAllBlogPaginate($limit)
    {
        $result = $this->model
            ->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('end_date', '>=', date('Y-m-d H:i:s'))
            ->paginate($limit);

        return $result;
    }
}
