@extends('web.layout')

@section('title', 'Blogs')
@section('css')

@endsection

@section('content')
    <div class="container header-padding-top">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-12">
                <div class="container">
                    <div class="row">
                        @foreach($blogList as $blog)
                        <!-- post -->
                            <div class="post col-xl-4">
                                <div class="post-thumbnail">
                                    <a href="{{ route('blogs.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                                        <img src='{{ asset("$blog->image") }}' alt="{{ $blog->title }}" class="img-fluid" width="100%">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <div class="post-meta d-flex justify-content-between">
                                        <div class="date meta-last">{{ dateFormat($blog->created_at, "F j| Y") }}</div>
                                        <div class="category">
                                            <a href="#">{{ breakStringToArray($blog->tags)[0] ?? '' }}</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('blogs.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                                        <h3 class="h4">{{ $blog->title }}</h3>
                                    </a>
                                    <p class="text-muted">
                                        {!! (strlen($blog->description) > 350) ? substr($blog->description, 0, 347) . ' ... ' : $blog->description !!}
                                    </p>
                                    <a href="{{ route('blogs.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}" class="more">{{ __('homepage.continue_reading') }}</a>
                                    <footer class="post-footer d-flex align-items-center">
                                        <a href="#" class="author d-flex align-items-center flex-wrap">
                                            <div class="avatar">
                                                <img src="{{ asset('web/img/admin_logo.png') }}" alt="Admin" class="img-fluid">
                                            </div>
                                            <div class="title">
                                                <span>{{ $blog->author }}</span>
                                            </div>
                                        </a>
                                        <div class="date">
                                            <i class="icon-clock"></i> {{ timeElapsedString($blog->created_at) }}
                                        </div>
                                        <div class="views meta-last">
                                            <i class="icon-eye"></i> {{ $blog->view }}
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->

                    <nav aria-label="Page navigation example">
                        @if (isset($blogList) && $blogList->lastPage() > 1)
                            <ul class="pagination pagination-template d-flex justify-content-center">
                                @php
                                $interval = isset($interval) ? abs(intval($interval)) : 3 ;
                                $from = $blogList->currentPage() - $interval;
                                if($from < 1){
                                    $from = 1;
                                }

                                $to = $blogList->currentPage() + $interval;
                                if($to > $blogList->lastPage()){
                                    $to = $blogList->lastPage();
                                }
                                @endphp


                                <!-- first/previous -->
                                @if($blogList->currentPage() > 1)
                                    <li class="page-item">
                                        <a href="{{ $blogList->url(1) }}" class="page-link">
                                            <i class="fa fa-angle-double-left"></i>
                                        </a>
                                    </li>

                                    <li class="page-item">
                                        <a href="{{ $blogList->url($blogList->currentPage() - 1) }}" class="page-link">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                @endif

                                <!-- links -->
                                @for($i = $from; $i <= $to; $i++)
                                    @php
                                        $isCurrentPage = $blogList->currentPage() == $i;
                                    @endphp
                                    <li class="page-item">
                                        <a href="{{ !$isCurrentPage ? $blogList->url($i) : '#' }}" class="page-link {{ $isCurrentPage }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- next/last -->
                                @if($blogList->currentPage() < $blogList->lastPage())
                                    <li class="page-item">
                                        <a href="{{ $blogList->url($blogList->currentPage() + 1) }}" class="page-link">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>

                                    <li class="page-item">
                                        <a href="{{ $blogList->url($blogList->lastpage()) }}" class="page-link">
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </nav>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('script')

@endsection