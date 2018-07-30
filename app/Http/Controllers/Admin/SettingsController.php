<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Services\SettingsService;
use App\Services\SlideService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * @var SettingsService
     */
    protected $settingService;

    /**
     * SettingsController constructor.
     * @param SlideService $slideService
     * @param SettingsService $settingService
     */
    public function __construct(
        SettingsService $settingService
    ) {
        $this->settingService = $settingService;
    }
    /**
     * Display a listing of info in footer.
     *
     * @return \Illuminate\Http\Response
     */
    public function footerIndex()
    {
        return view('admin.pages.settings.settings.index');
    }

    public function footerUpdate()
    {

    }

    /**
     * Display a listing of the slides.
     *
     * @return \Illuminate\Http\Response
     */
    public function slideIndex()
    {
        $slideShow = $this->settingService->getSlideShowing();
        $slideNotShow = $this->settingService->getSlideNotShow(config('constant.number.slide.not_show'));

        return view('admin.pages.settings.slides.index', compact('slideShow', 'slideNotShow'));
    }

    /**
     * Store a newly slide in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slideStore(Request $request)
    {
        $data = $request->except('_token');
        $result = $this->settingService->createSlide($data);
        if ($result) {
            return redirect()->route('slide.index')->with('success', 'Create new slide successfully!');
        } else {
            return redirect()->back()->with('error', 'Having error when save slide');
        }
    }

    /**
     * Choosing slide show
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function slideChoose($id) {
        $result = $this->settingService->chooseSlide($id);
        if ($result) {
            return redirect()->route('slide.index')->with('success', 'Change slide successfully!');
        } else {
            return redirect()->back()->with('error', 'Having error when change slide');
        }
    }
}
