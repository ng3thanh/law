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

    /**
     * Get slide showing (only one)
     * @return mixed
     */
    public function getSlideShowing()
    {
        $data = $this->slidesRepository->getDataOrderBy('updated_at')->first();
        return $data;
    }

    /**
     * Get 4 slide not show
     *
     * @return mixed
     */
    public function getSlideNotShow($limit)
    {
        $data = $this->slidesRepository->getSlideNotShow($limit)->get();
        return $data;
    }

    public function createSlide($data)
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

    public function chooseSlide($id)
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