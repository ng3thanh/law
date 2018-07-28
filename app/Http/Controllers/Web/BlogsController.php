<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * @var BlogService
     */
    protected $blogService;

    /**
     * BlogsController constructor.
     * @param BlogService $blogService
     */
    public function __construct(
        BlogService $blogService
    ) {
        $this->blogService = $blogService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogList = $this->blogService->getAllBlog();
        return view('web.pages.blogs.list', compact('blogList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = $this->blogService->findBlogBySlug($slug);
        $randomBlog = $this->blogService->randomBlog(3);
        return view('web.pages.blogs.detail', compact('blog', 'randomBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogs  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blog)
    {
        //
    }
}
