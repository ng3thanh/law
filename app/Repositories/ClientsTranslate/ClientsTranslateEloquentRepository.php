<?php

namespace App\Repositories\ClientsTranslate;

use App\Models\ClientsTranslation;
use App\Repositories\Base\BaseEloquentRepository;

class ClientsTranslateEloquentRepository extends BaseEloquentRepository implements ClientsTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return ClientsTranslation::class;
    }
}
