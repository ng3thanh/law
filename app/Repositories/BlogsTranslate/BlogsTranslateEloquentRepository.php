<?php

namespace App\Repositories\BlogsTranslate;

use App\Models\BlogsTranslate;
use App\Repositories\Base\BaseEloquentRepository;

class BlogsTranslateEloquentRepository extends BaseEloquentRepository implements BlogsTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return BlogsTranslate::class;
    }
}
