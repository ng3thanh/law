<?php

namespace App\Repositories\Services;

use App\Models\Services;
use App\Repositories\Base\BaseEloquentRepository;

class ServicesEloquentRepository extends BaseEloquentRepository implements ServicesRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Services::class;
    }
}
