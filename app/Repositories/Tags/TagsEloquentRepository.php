<?php

namespace App\Repositories\Tags;

use App\Models\Tags;
use App\Repositories\Base\BaseEloquentRepository;

class TagsEloquentRepository extends BaseEloquentRepository implements TagsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Tags::class;
    }

    /**
     * Get all tags of blog
     *
     * @param $id
     * @return mixed
     */
    public function getAllTagsOfBlog($id)
    {
        $locale = app()->getLocale();
        $result = $this->model->join('tag_blogs', 'tag_blogs.tag_id', '=', 'tags.id')
            ->where('tag_blogs.locale', $locale)
            ->where('tag_blogs.blog_id', $id)
            ->get();

        return $result;
    }
}
