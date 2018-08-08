<?php

namespace App\Repositories\ServicesTranslate;

use App\Models\ClientsTranslate;
use App\Models\ServicesTranslate;
use App\Repositories\Base\BaseEloquentRepository;

class ServicesTranslateEloquentRepository extends BaseEloquentRepository implements ServicesTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return ServicesTranslate::class;
    }
}
