<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Feedbacks;
use App\Services\BlogService;
use App\Services\ClientService;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @var BlogService
     */
    protected $blogService;

    /**
     * @var ClientService
     */
    protected $clientService;

    /**
     * @var ServiceService
     */
    protected $serviceService;

    /**
     * MainController constructor.
     *
     * @param BlogService $blogService
     * @param ClientService $clientService
     * @param ServiceService $serviceService
     */
    public function __construct(
        BlogService $blogService,
        ClientService $clientService,
        ServiceService $serviceService
    ) {
        $this->blogService = $blogService;
        $this->clientService = $clientService;
        $this->serviceService = $serviceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->clientService->getClientLimit(config('constant.number.client.paginate.web'));
        $services = $this->serviceService->getServiceLimit(config('constant.number.service.paginate.web'));
        $blogs = $this->blogService->getBlogLimit(config('constant.number.blog.paginate.main'));
        return view('web.home', compact('clients','services', 'blogs'));
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
     * @param  \App\Models\Feedbacks  $feedbacks
     * @return \Illuminate\Http\Response
     */
    public function show(Feedbacks $feedbacks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedbacks  $feedbacks
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedbacks $feedbacks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedbacks  $feedbacks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedbacks $feedbacks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedbacks  $feedbacks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedbacks $feedbacks)
    {
        //
    }

    public function changeLanguage($language)
    {
        session()->put('website_language', $language);
        return redirect()->back();
    }
}
