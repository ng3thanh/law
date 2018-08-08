<?php

namespace App\Repositories\ClientsTranslate;

use App\Models\ClientsTranslate;
use App\Repositories\Base\BaseEloquentRepository;

class ClientsTranslateEloquentRepository extends BaseEloquentRepository implements ClientsTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return ClientsTranslate::class;
    }
}
