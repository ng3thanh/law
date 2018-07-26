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
}