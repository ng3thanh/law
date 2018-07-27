<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slides;
use App\Services\SlideService;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * @var SlideService
     */
    protected $slideService;

    /**
     * SlidesController constructor.
     * @param SlideService $slideService
     */
    public function __construct(
        SlideService $slideService
    ) {
        $this->slideService = $slideService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideShow = $this->slideService->getSlideShow();
        $slideNotShow = $this->slideService->getSlideNotShow();

        return view('admin.pages.settings.slides.index', compact('slideShow', 'slideNotShow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $result = $this->slideService->create($data);
        if ($result) {
            return redirect()->route('slide.index')->with('success', 'Create new slide successfully!');
        } else {
            return redirect()->back()->with('error', 'Having error when save slide');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function show(Slides $slides)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function edit(Slides $slides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slides $slides)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slides $slides)
    {
        //
    }

    public function choose($id) {
        $result = $this->slideService->choose($id);
        if ($result) {
            return redirect()->route('slide.index')->with('success', 'Change slide successfully!');
        } else {
            return redirect()->back()->with('error', 'Having error when change slide');
        }
    }
}
