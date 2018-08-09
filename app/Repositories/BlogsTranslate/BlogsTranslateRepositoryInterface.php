<?php

namespace App\Repositories\BlogsTranslate;

use App\Repositories\Base\BaseRepositoryInterface;

interface BlogsTranslateRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function findTransBlogBaseBlogId($id);

    /**
     * @param $id
     * @param $locale
     * @param $data
     * @return mixed
     */
    public function updateTrans($id, $locale, $data);
}