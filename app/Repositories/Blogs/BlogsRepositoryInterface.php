<?php

namespace App\Repositories\Blogs;

use App\Repositories\Base\BaseRepositoryInterface;

interface BlogsRepositoryInterface extends BaseRepositoryInterface
{
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
}