<?php

namespace App\Services;

use App\Repositories\Blogs\BlogsRepositoryInterface;

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
        $data = formatDataBaseOnTable('blogs', $data);
        dd($data);
        $this->blogsRepository->create($data);
        return true;
    }
}