<?php

namespace App\Repositories\Feedbacks;

use App\Models\Feedbacks;
use App\Repositories\Base\BaseEloquentRepository;

class FeedbacksEloquentRepository extends BaseEloquentRepository implements FeedbacksRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Feedbacks::class;
    }
}
