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

    public function create($data)
    {
        try {
            if ($data['image']) {
                $file = $data['image'];
                unset($data['image']);
            }

            $data['publish_date'] = date('Y-m-d H:i:s', strtotime($data['publish_date']));
            $data['end_date'] = date('Y-m-d H:i:s', strtotime($data['end_date']));
            $data['author'] = Sentinel::getUser()->username;
            $data = formatDataBaseOnTable('blogs', $data);
            $result = $this->blogsRepository->create($data);
            if ($result) {
                $newName = 'blog_' . $result->id . '_main_image.' . $file->getClientOriginalExtension();
                $file->move(config('upload.blog') . $result->id . '/', $newName);
                $this->blogsRepository->update($result->id, ['image' => config('upload.blog') . $result->id . '/' . $newName]);
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}