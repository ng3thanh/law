<?php

namespace App\Repositories\IntroducesTranslate;

use App\Models\ClientsTranslate;
use App\Models\IntroduceTranslate;
use App\Repositories\Base\BaseEloquentRepository;

class IntroducesTranslateEloquentRepository extends BaseEloquentRepository implements IntroducesTranslateRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return IntroduceTranslate::class;
    }
}
