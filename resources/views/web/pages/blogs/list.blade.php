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
                        <!-- post -->
                        <div class="post col-xl-4">
                            <div class="post-thumbnail"><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}"><img src="{{ asset('web/img/blog-post-1.jpeg') }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">20 May | 2016</div>
                                    <div class="category"><a href="#">Business</a></div>
                                </div><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}">
                                    <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('web/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>John Doe</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                        <!-- post -->
                        <div class="post col-xl-4">
                            <div class="post-thumbnail"><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}"><img src="{{ asset('web/img/blog-post-1.jpeg') }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">20 May | 2016</div>
                                    <div class="category"><a href="#">Business</a></div>
                                </div><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}">
                                    <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('web/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>John Doe</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                        <!-- post -->
                        <div class="post col-xl-4">
                            <div class="post-thumbnail"><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}"><img src="{{ asset('web/img/blog-post-2.jpg') }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">20 May | 2016</div>
                                    <div class="category"><a href="#">Business</a></div>
                                </div><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}">
                                    <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('web/img/avatar-2.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>John Doe</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-xl-4">
                            <div class="post-thumbnail"><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}"><img src="{{ asset('web/img/blog-post-3.jpeg') }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">20 May | 2016</div>
                                    <div class="category"><a href="#">Business</a></div>
                                </div><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}">
                                    <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('web/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>John Doe</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div>
                        <!-- post -->
                        <div class="post col-xl-4">
                            <div class="post-thumbnail"><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}"><img src="{{ asset('web/img/blog-post-4.jpeg') }}" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last">20 May | 2016</div>
                                    <div class="category"><a href="#">Business</a></div>
                                </div><a href="{{ route('blog.detail', ['slug'=>'abc','id'=>1]) }}">
                                    <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('web/img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>John Doe</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-template d-flex justify-content-center">
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('script')

@endsection