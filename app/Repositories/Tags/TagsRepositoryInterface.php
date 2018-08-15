<?php

namespace App\Repositories\Tags;

use App\Repositories\Base\BaseRepositoryInterface;

interface TagsRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get all tags of blog
     *
     * @param $id
     * @return mixed
     */
    public function getAllTagsOfBlog($id);
}