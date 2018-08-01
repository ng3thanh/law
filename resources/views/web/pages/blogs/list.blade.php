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
                                    <a href="{{ route('blogs.detail', $blog->slug) }}">
                                        <img src='{{ asset("$blog->image") }}' alt="{{ $blog->title }}" class="img-fluid" width="100%">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <div class="post-meta d-flex justify-content-between">
                                        <div class="date meta-last">20 May | 2016</div>
                                        <div class="category">
                                            <a href="#">Business</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('blogs.detail', $blog->slug) }}">
                                        <h3 class="h4">{{ $blog->title }}</h3>
                                    </a>
                                    <p class="text-muted">{!! $blog->description !!}</p>
                                    <footer class="post-footer d-flex align-items-center">
                                        <a href="#" class="author d-flex align-items-center flex-wrap">
                                            <div class="avatar">
                                                <img src="{{ asset('web/img/avatar-3.jpg') }}" alt="..." class="img-fluid">
                                            </div>
                                            <div class="title">
                                                <span>{{ $blog->author }}</span>
                                            </div>
                                        </a>
                                        <div class="date">
                                            <i class="icon-clock"></i> {{ timeElapsedString($blog->publish_date) }}
                                        </div>
                                        <div class="comments meta-last">
                                            <i class="icon-comment"></i>12
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