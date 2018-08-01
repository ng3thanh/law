<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use App\Services\ClientService;
use App\Services\FeedbackService;
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
     * @var FeedbackService
     */
    protected $feedbackService;

    /**
     * MainController constructor.
     *
     * @param BlogService $blogService
     * @param ClientService $clientService
     * @param ServiceService $serviceService
     * @param FeedbackService $feedbackService
     */

    public function __construct(
        BlogService $blogService,
        ClientService $clientService,
        ServiceService $serviceService,
        FeedbackService $feedbackService
    ) {
        $this->blogService = $blogService;
        $this->clientService = $clientService;
        $this->serviceService = $serviceService;
        $this->feedbackService = $feedbackService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCount = $this->blogService->countBlog();
        $clientCount = $this->clientService->countClient();
        $serviceCount = $this->serviceService->countService();
        $contactCount = $this->feedbackService->countFeedback();
        return view('admin.dashboard', compact('blogCount', 'clientCount', 'serviceCount', 'contactCount'));
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
}
