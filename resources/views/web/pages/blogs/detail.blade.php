@extends('web.layout')

@section('title', 'Blogs')
@section('css')

@endsection
@section('content')
    <div class="container header-padding-top">
        <div class="row">
            <!-- Latest Posts -->
            <main class="post blog-post col-lg-8">
                <div class="container">
                    <div class="post-single">
                        <div class="post-thumbnail">
                            <img src="{{ asset('web/img/blog-post-3.jpeg') }}" alt="..." class="img-fluid">
                        </div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="category"><a href="#">Business</a><a href="#">Financial</a></div>
                            </div>
                            <h1>{{ $blog->title }} <a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                            <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                                <a href="#" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar">
                                        <img src="{{ asset('web/img/avatar-1.jpg') }}" alt="..." class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <span>{{ $blog->author }}</span>
                                    </div>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="date"><i class="icon-clock"></i> {{ timeElapsedString($blog->publish_date) }}</div>
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                                </div>
                            </div>
                            <div class="post-body">
                                {!! $blog->content !!}
                            </div>
                            <div class="post-tags">
                                <a href="#" class="tag">#Business</a>
                                <a href="#" class="tag">#Tricks</a>
                                <a href="#" class="tag">#Financial</a>
                                <a href="#" class="tag">#Economy</a>
                            </div>
                            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                                <a href="#" class="prev-post text-left d-flex align-items-center">
                                    <div class="icon prev">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="text">
                                        <strong class="text-primary">Previous Post </strong>
                                        <h6>I Bought a Wedding Dress.</h6>
                                    </div>
                                </a>
                                <a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                                    <div class="text">
                                        <strong class="text-primary">Next Post </strong>
                                        <h6>I Bought a Wedding Dress.</h6>
                                    </div>
                                    <div class="icon next">
                                        <i class="fa fa-angle-right">   </i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-comments">
                                <header>
                                    <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
                                </header>
                                <div class="comment">
                                    <div class="comment-header d-flex justify-content-between">
                                        <div class="user d-flex align-items-center">
                                            <div class="image"><img src="{{ asset('web/img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="title"><strong>Jabi Hernandiz</strong><span class="date">May 2016</span></div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comment-header d-flex justify-content-between">
                                        <div class="user d-flex align-items-center">
                                            <div class="image"><img src="{{ asset('web/img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comment-header d-flex justify-content-between">
                                        <div class="user d-flex align-items-center">
                                            <div class="image"><img src="{{ asset('web/img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
                                            <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="add-comment">
                                <header>
                                    <h3 class="h6">Leave a reply</h3>
                                </header>
                                <form action="#" class="commenting-form">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="username" id="username" placeholder="Name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" name="username" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-secondary">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4">
                <div class="widget latest-posts">
                    <header>
                        <h3 class="h6">Random Posts</h3>
                    </header>
                    <div class="blog-posts">
                        @foreach ($randomBlog as $rBlog)
                            <a href="{{ route('blogs.detail', $rBlog->slug) }}">
                                <div class="item d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{ asset('web/img/small-thumbnail-1.jpg') }}" alt="..." class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <strong>{{ $rBlog->title }}</strong>
                                        <div class="d-flex align-items-center">
                                            <div class="views"><i class="icon-eye"></i> 500</div>
                                            <div class="comments"><i class="icon-comment"></i>12</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Widget [Tags Cloud Widget]-->
                <div class="widget tags">
                    <header>
                        <h3 class="h6">Tags</h3>
                    </header>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection


@section('script')

@endsection