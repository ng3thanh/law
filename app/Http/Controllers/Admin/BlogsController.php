<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostRequest;
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
        $blogs = $this->blogService->getAllBlog();
        return view('admin.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param BlogPostRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(BlogPostRequest $request)
    {
        $data = $request->except('_token');
        $result = $this->blogService->create($data);
        if ($result) {
            return redirect()->route('blog.index')->with('success', 'Create new data successfully!');
        } else {
            return redirect()->back()->with('errors', 'Having error when save data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blog)
    {
        return view('admin.pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Blogs $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blog)
    {
        $data = $request->except('_token', '_method');
        $result = $this->blogService->update($blog->id, $data);
        if ($result) {
            return redirect()->route('blog.index')->with('success', 'Update data successfully!');
        } else {
            return redirect()->back()->with('errors', 'Having error when update data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blog)
    {
        //
    }
}
