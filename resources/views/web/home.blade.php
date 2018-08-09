@extends('web.layout')

@section('title', 'Blogs')
@section('css')

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
                <h4>Who We Are</h4>
                <div class="row">
                    <div class="col-lg-4 offset-1">
                        <div>
                            <h2>We live with <strong>creativity</strong></h2>
                            <p>
                                Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe
                                al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <img src="{{ asset('web/img/icons/creativity.png') }}" alt="" />
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
                <h4>Services</h4>
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
                <h4>Feature clients</h4>
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
                <h4>Our Blog</h4>
                <!-- Three columns -->
                <div class="row">
                    {{--@foreach($blogs as $blog)--}}
                    {{--<div class="span3 col-lg-3">--}}
                        {{--<div class="home-post">--}}
                            {{--<div class="post-image">--}}
                                {{--<img class="max-img" src='{{ asset("$blog->image") }}' alt="{{ $blog->title }}" />--}}
                            {{--</div>--}}
                            {{--<div class="post-meta">--}}
                                {{--<i class="icon-file icon-2x"></i>--}}
                                {{--<span class="date">{{ timeFormatTextDate($blog->publish_date) }}</span>--}}
                                {{--<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>--}}
                            {{--</div>--}}
                            {{--<div class="entry-content">--}}
                                {{--<h5>--}}
                                    {{--<strong>--}}
                                        {{--<a href="{{ route('blogs.detail', $blog->slug) }}">--}}
                                            {{--{{ $blog->title }}--}}
                                        {{--</a>--}}
                                    {{--</strong>--}}
                                {{--</h5>--}}
                                {{--{!! (strlen($blog->description) > 150) ? substr($blog->description, 0, 147) . ' ... ' : $blog->description !!}--}}
                                {{--<a href="{{ route('blogs.detail', $blog->slug) }}" class="more">Read more</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                </div>
                <div class="blankdivider30"></div>
                <div class="aligncenter">
                    <a href="{{ route('blogs.index') }}" class="btn btn-large btn-theme">More blog post</a>
                </div>
            </div>
        </section>
        <!-- end spacer section -->
        <!-- section: contact -->
        <section id="contact" class="section green">
            <div class="container">
                <h4>Get in Touch</h4>
                <p>
                    Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei
                    eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
                </p>
                <div class="blankdivider30">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cform" id="contact-form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="{{ route('feedbacks.store') }}" method="post" role="form" class="contactForm">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="field your-name form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="field your-email form-group">
                                            <input type="text" class="form-control" name="mail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="field subject form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field message form-group">
                                            <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <input type="submit" value="Send message" class="btn btn-theme pull-left">
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