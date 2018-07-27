<?php

namespace App\Services;

use App\Repositories\Blogs\BlogsRepositoryInterface;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;

class BlogService
{
    /**
     * @var BlogsRepositoryInterface
     */
    protected $blogsRepository;

    /**
     * BlogService constructor.
     * @param BlogsRepositoryInterface $blogsRepository
     */
    public function __construct(
        BlogsRepositoryInterface $blogsRepository
    ) {
        $this->blogsRepository = $blogsRepository;
    }

    public function findBlog($id)
    {
        $data = $this->blogsRepository->find($id);
        return $data;
    }

    public function getAllBlog()
    {
        $data = $this->blogsRepository->getAllPaginate(200);
        return $data;
    }

    public function create($data)
    {
        try {
            if (isset($data['image'])) {
                $file = $data['image'];
                unset($data['image']);
            }

            $data['publish_date'] = date('Y-m-d H:i:s', strtotime($data['publish_date']));
            $data['end_date'] = date('Y-m-d H:i:s', strtotime($data['end_date']));
            $data['author'] = Sentinel::getUser()->username;
            $data = formatDataBaseOnTable('blogs', $data);
            $result = $this->blogsRepository->create($data);
            if ($result) {
                $newName = uploadImage($result->id, $file, 'blog');
                $this->blogsRepository->update(
                    $result->id,
                    ['image' => config('upload.blog') . $result->id . '/' . $newName
                ]);
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            if (isset($data['image'])) {
                $newName = uploadImage($id, $data['image'], 'blog');
                $data['image'] = config('upload.blog') . $id . '/' . $newName;
            }

            $data['publish_date'] = date('Y-m-d H:i:s', strtotime($data['publish_date']));
            $data['end_date'] = date('Y-m-d H:i:s', strtotime($data['end_date']));

            $data = formatDataBaseOnTable('blogs', $data);
            $this->blogsRepository->update($id, $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}