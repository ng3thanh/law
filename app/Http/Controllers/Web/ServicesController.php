<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Services\ServiceService;

class ServicesController extends Controller
{
    /**
     * @var ServiceService
     */
    protected $serviceService;

    /**
     * ServicesController constructor.
     * @param ServiceService $serviceService
     */
    public function __construct(
        ServiceService $serviceService
    ) {
        $this->serviceService = $serviceService;
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $service = $this->serviceService->findServiceBySlug($slug);
        return view('services.detail', compact('service'));
    }

}
