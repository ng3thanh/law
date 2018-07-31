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
}