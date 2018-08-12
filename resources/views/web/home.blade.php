@extends('web.layout')

@section('title', 'Blogs')
@section('css')
    <style>
        #homepage #header-wrapper.header-slider {
            background: #444 url({{ asset("$slide->image") }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <div id="homepage">
        <!-- Header area -->
        <div id="header-wrapper" class="header-slider">
            <header class="clearfix">
                <div class="logo">
                    <img src="{{ asset('web/img/logo-image.png') }}" alt="" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="main-flexslider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <p class="home-slide-content">
                                            <strong>creative</strong> and passion
                                        </p>
                                    </li>
                                    <li>
                                        <p class="home-slide-content">
                                            Eat and drink <strong>design</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="home-slide-content">
                                            We loves <strong>simplicity</strong>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- section: team -->
        <section id="about" class="section">
            <div class="container">
                <h4>{{ __('homepage.we_are') }}</h4>
                <div class="row">
                    <div class="col-lg-4 offset-1">
                        <div>
                            <h2>{{ $introduce->name }}</h2>
                            {!! $introduce->content !!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <img src="{{ asset("$introduce->image") }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- end section: team -->
        <!-- section: services -->
        <section id="services" class="section black">
            <div class="container">
                <h4>{{ __('homepage.services') }}</h4>
                <!-- Four columns -->
                <div class="row">
                    @foreach ($services as $service)
                    <div class="service-box-hover col-lg-3">
                        <div class="service-box">
                            <img src='{{ asset("$service->image") }}' alt="{{ $service->name }}" />
                            <h2>{{ $service->name }}</h2>
                            {!! $service->description !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end section: services -->
        <!-- section: works -->
        <section id="works" class="section">
            <div class="container clearfix">
                <h4>{{ __('homepage.clients') }}</h4>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 20px">
                        <div id="portfolio-wrap">
                            @foreach ($clients as $key => $client)
                            <!-- portfolio item -->
                            <div class="portfolio-item grid print photography">
                                <div class="portfolio">
                                    <a href='{{ asset("$client->image") }}' data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                        <img src='{{ asset("$client->image") }}' alt="" />
                                        <div class="portfolio-overlay">
                                            <div class="thumb-info">
                                                <h5>{{ $client->name }}</h5>
                                                <i class="icon-plus icon-2x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end portfolio item -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section: blog -->
        <section id="blog" class="section">
            <div class="container">
                <h4>{{ __('homepage.our_blog') }}</h4>
                <!-- Three columns -->
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="span3 col-lg-3">
                        <div class="home-post">
                            <div class="post-image">
                                <img class="max-img" src='{{ asset("$blog->image") }}' alt="{{ $blog->title }}" />
                            </div>
                            <div class="post-meta">
                                <i class="icon-file icon-2x"></i>
                                <span class="date">{{ timeFormatTextDate($blog->publish_date) }}</span>
                                <span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
                            </div>
                            <div class="entry-content">
                                @foreach($blog->translations as $trans)
                                    @if(checkLanguage($trans->locale, 'boolean'))
                                        <h5>
                                            <strong>
                                                <a href="{{ route('blogs.detail', $trans->slug) }}">
                                                    {{ $trans->title }}
                                                </a>
                                            </strong>
                                        </h5>
                                        {!! (strlen($trans->description) > 150) ? substr($trans->description, 0, 147) . ' ... ' : $trans->description !!}
                                        <a href="{{ route('blogs.detail', $trans->slug) }}" class="more">{{ __('homepage.read_more') }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blankdivider30"></div>
                <div class="aligncenter">
                    <a href="{{ route('blogs.index') }}" class="btn btn-large btn-theme">{{ __('homepage.more_blog') }}</a>
                </div>
            </div>
        </section>
        <!-- end spacer section -->
        <!-- section: contact -->
        <section id="contact" class="section green">
            <div class="container">
                <h4>{{ __('homepage.feedback_label') }}</h4>
                <p>
                    {{ __('homepage.feedback_message') }}
                </p>
                <div class="blankdivider30">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cform" id="contact-form">
                            <div id="sendmessage">{{ __('homepage.feedback_message_success') }}</div>
                            <div id="errormessage"></div>
                            <form action="{{ route('feedbacks.store') }}" method="post" role="form" class="contactForm">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="field your-name form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('homepage.your_name') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="field your-email form-group">
                                            <input type="text" class="form-control" name="mail" id="email" placeholder="{{ __('homepage.your_email') }}" data-rule="email" data-msg="Please enter a valid email" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="field subject form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('homepage.your_subject') }}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field message form-group">
                                            <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="{{ __('homepage.your_message') }}"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <input type="submit" value="{{ __('homepage.send_feedback') }}" class="btn btn-theme pull-left">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('web/js/contactform.js') }}"></script>
@endsection