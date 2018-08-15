<?php

namespace App\Repositories\TagBlogs;

use App\Models\TagBlogs;
use App\Repositories\Base\BaseEloquentRepository;

class TagBlogsEloquentRepository extends BaseEloquentRepository implements TagBlogsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return TagBlogs::class;
    }
}
