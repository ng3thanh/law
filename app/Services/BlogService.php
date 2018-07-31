<?php

namespace App\Services;

use App\Repositories\Blogs\BlogsRepositoryInterface;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;
use Illuminate\Support\Facades\DB;

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

    /**
     * Find blog
     *
     * @param $id
     * @return mixed
     */
    public function findBlog($id)
    {
        $data = $this->blogsRepository->find($id);
        return $data;
    }

    /**
     * Get all blog and paginate
     *
     * @return mixed
     */
    public function getAllBlog()
    {
        $data = $this->blogsRepository->getAllPaginate(config('constant.number.blog.paginate.admin'));
        return $data;
    }

    /**
     * Find blog by slug
     *
     * @param $slug
     * @return mixed
     */
    public function findBlogBySlug($slug)
    {
        $data = $this->blogsRepository->findBySlug($slug);
        return $data;
    }

    /**
     * Create new blog
     *
     * @param $data
     * @return bool
     */
    public function createBlog($data)
    {
        try {
            DB::beginTransaction();

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
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    /**
     * Update blog
     *
     * @param $id
     * @param $data
     * @return bool
     */
    public function updateBlog($id, $data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['image'])) {
                $newName = uploadImage($id, $data['image'], 'blog');
                $data['image'] = config('upload.blog') . $id . '/' . $newName;
            }

            $data['publish_date'] = date('Y-m-d H:i:s', strtotime($data['publish_date']));
            $data['end_date'] = date('Y-m-d H:i:s', strtotime($data['end_date']));

            $data = formatDataBaseOnTable('blogs', $data);
            $this->blogsRepository->update($id, $data);
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    /**
     * @param $number
     * @return mixed
     */
    public function randomBlog($number)
    {
        $result = $this->blogsRepository->getSomeRandomData($number);
        return $result;
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getServiceLimit($limit)
    {
        $data = $this->blogsRepository->getDataLimit($limit)->get();
        return $data;
    }
}