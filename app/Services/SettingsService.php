<?php

namespace App\Services;

use App\Repositories\Slides\SlidesRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class SettingsService
{
    /**
     * @var SlidesRepositoryInterface
     */
    protected $slidesRepository;

    /**
     * SlideService constructor.
     * @param SlidesRepositoryInterface $slidesRepository
     */
    public function __construct(
        SlidesRepositoryInterface $slidesRepository
    ) {
        $this->slidesRepository = $slidesRepository;
    }

    public function getSlideShow()
    {
        $data = $this->slidesRepository->getFirst('updated_at');
        return $data;
    }

    public function getSlideNotShow()
    {
        $data = $this->slidesRepository->getSlideNotShow(4);
        return $data;
    }

    public function create($data)
    {
        try {
            DB::beginTransaction();

            $this->deleteAllSlideShow();

            if (isset($data['image'])) {
                $file = $data['image'];
                unset($data['image']);
            }
            $result = $this->slidesRepository->create($data);
            if ($result) {
                $newName = uploadImage($result->id, $file, 'slide');
                $this->slidesRepository->update(
                    $result->id,
                    ['image' => config('upload.slide') . $result->id . '/' . $newName]
                );
            }
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    private function deleteAllSlideShow()
    {
        $slides = $this->slidesRepository->getAll();
        foreach ($slides as $slide) {
            $this->slidesRepository->delete($slide->id);
        }
    }

    public function choose($id)
    {
        try {
            DB::beginTransaction();

            $this->deleteAllSlideShow();
            $slide = $this->slidesRepository->findWithTrash($id);
            $slide->restore();

            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}