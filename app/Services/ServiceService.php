<?php

namespace App\Services;

use App\Repositories\Services\ServicesRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Exception;

class ServiceService
{
    /**
     * @var ServicesRepositoryInterface
     */
    protected $servicesRepository;

    /**
     * ServiceService constructor.
     * @param ServicesRepositoryInterface $servicesRepository
     */
    public function __construct(
        ServicesRepositoryInterface $servicesRepository
    ) {
        $this->servicesRepository = $servicesRepository;
    }

    public function getAllService()
    {
        $data = $this->servicesRepository->getAllPaginate(config('constant.number.service.paginate.admin'));
        return $data;
    }

    public function createService($data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['image'])) {
                $file = $data['image'];
                unset($data['image']);
            }

            $data = formatDataBaseOnTable('services', $data);
            $result = $this->servicesRepository->create($data);
            if ($result) {
                $newName = uploadImage($result->id, $file, 'service');
                $this->servicesRepository->update(
                    $result->id,
                    ['image' => config('upload.service') . $result->id . '/' . $newName
                    ]);
            }
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function updateService($id, $data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['image'])) {
                $newName = uploadImage($id, $data['image'], 'service');
                $data['image'] = config('upload.service') . $id . '/' . $newName;
            }

            $data = formatDataBaseOnTable('services', $data);
            $this->servicesRepository->update($id, $data);
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function getServiceLimit($limit)
    {
        $data = $this->servicesRepository->getDataLimit($limit)->get();
        return $data;
    }
}