<?php

namespace App\Services;

use App\Repositories\Blogs\BlogsRepositoryInterface;
use App\Repositories\BlogsTranslate\BlogsTranslateRepositoryInterface;
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
     * @var BlogsTranslateRepositoryInterface
     */
    protected $blogsTransRepository;

    /**
     * BlogService constructor.
     * @param BlogsRepositoryInterface $blogsRepository
     * @param BlogsTranslateRepositoryInterface $blogsTransRepository
     */
    public function __construct(
        BlogsRepositoryInterface $blogsRepository,
        BlogsTranslateRepositoryInterface $blogsTransRepository
    ) {
        $this->blogsRepository = $blogsRepository;
        $this->blogsTransRepository = $blogsTransRepository;
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
    public function getAllBlog($limit)
    {
        $data = $this->blogsRepository->getAllPaginate($limit);
        return $data;
    }

    /**
     * Get all blog and paginate to show in web
     *
     * @return mixed
     */
    public function getAllBlogInWeb($limit)
    {
        $data = $this->blogsRepository->getAllBlogPaginate($limit);
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
     * @param $blog
     * @return mixed
     */
    public function findBlogNext($blog)
    {
        $data = $this->blogsRepository->getBlogNextDate($blog->id, $blog->publish_date);
        return $data;
    }

    /**
     * @param $blog
     * @return mixed
     */
    public function findBlogPrevious($blog)
    {
        $data = $this->blogsRepository->getBlogPreviousDate($blog->id, $blog->publish_date);
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

            // Get image
            if (isset($data['image'])) {
                $file = $data['image'];
                unset($data['image']);
            }

            // Save data of base blog
            $data['publish_date'] = date('Y-m-d H:i:s', strtotime($data['publish_date']));
            $data['end_date'] = date('Y-m-d H:i:s', strtotime($data['end_date']));
            $data['author'] = Sentinel::getUser()->username;
            $dataMainBlog = formatDataBaseOnTable('blogs', $data);
            $result = $this->blogsRepository->create($dataMainBlog);

            // Update image to base blog
            if ($result) {
                $newName = uploadImage($result->id, $file, 'blog');
                $this->blogsRepository->update(
                    $result->id,
                    [
                        'image' => config('upload.blog') . $result->id . '/' . $newName
                    ]);
            }

            // Save translate data
            $dataTranslates = $data['trans'];
            foreach ($dataTranslates as $key => $value) {
                $dataBlogTrans = $value;
                $dataBlogTrans['locale'] = $key;
                $dataBlogTrans['blogs_id'] = $result->id;
                $this->blogsTransRepository->create($dataBlogTrans);
            }

            DB::commit();
            return true;
        } catch (Exception $e) {
            dd($e->getMessage());
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


    public function countBlog()
    {
        $data = $this->blogsRepository->countAll();
        return $data;
    }
}