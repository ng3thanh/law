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

    /**
     * Find by slug
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug)
    {
        $locale = app()->getLocale();
        $result = $this->model->join('services_translate', 'services_translate.services_id', '=', 'services.id')
            ->where('services_translate.slug', $slug)
            ->where('services_translate.locale', $locale)
            ->first();
        return $result;
    }
}
