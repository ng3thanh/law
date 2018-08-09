<?php

namespace App\Repositories\BlogsTranslate;

use App\Models\BlogsTranslation;
use App\Repositories\Base\BaseEloquentRepository;

class BlogsTranslateEloquentRepository extends BaseEloquentRepository implements BlogsTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return BlogsTranslation::class;
    }
}
