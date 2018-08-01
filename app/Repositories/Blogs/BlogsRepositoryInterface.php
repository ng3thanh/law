<?php

namespace App\Repositories\Blogs;

use App\Repositories\Base\BaseRepositoryInterface;

interface BlogsRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished();

    /**
     * Get post only published
     * @return mixed
     */
    public function findOnlyPublished($id);

    /**
     * Find by slug
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug);

    /**
     * @param $id
     * @param $date
     * @return mixed
     */
    public function getBlogNextDate($id, $date);

    /**
     * @param $id
     * @param $date
     * @return mixed
     */
    public function getBlogPreviousDate($id, $date);

    /**
     * @param $limit
     * @return mixed
     */
    public function getAllBlogPaginate($limit);
}