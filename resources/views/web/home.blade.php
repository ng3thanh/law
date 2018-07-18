<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maxim - Modern One Page Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('web.assets.css')
    <link rel="shortcut icon" href="{{ asset('web/img/favicon.ico') }}">
</head>

<body>
    @include('web.partials.navbar')
    @include('web.partials.header')
    <!-- section: team -->
    <section id="about" class="section">
        <div class="container">
            <h4>Who We Are</h4>
            <div class="row">
                <div class="span4 offset1">
                    <div>
                        <h2>We live with <strong>creativity</strong></h2>
                        <p>
                            Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe
                            al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                        </p>
                    </div>
                </div>
                <div class="span6">
                    <div class="aligncenter">
                        <img src="{{ asset('web/img/icons/creativity.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- end section: team -->

    <!-- section: services -->
    <section id="services" class="section orange">
        <div class="container">
            <h4>Services</h4>
            <!-- Four columns -->
            <div class="row">
                <div class="span3 animated-fast flyIn">
                    <div class="service-box">
                        <img src="{{ asset('web/img/icons/laptop.png') }}" alt="" />
                        <h2>Web design</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="span3 animated flyIn">
                    <div class="service-box">
                        <img src="{{ asset('web/img/icons/lab.png') }}" alt="" />
                        <h2>Web development</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="span3 animated-fast flyIn">
                    <div class="service-box">
                        <img src="{{ asset('web/img/icons/camera.png') }}" alt="" />
                        <h2>Photography</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="span3 animated-slow flyIn">
                    <div class="service-box">
                        <img src="{{ asset('web/img/icons/basket.png') }}" alt="" />
                        <h2>Ecommerce</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section: services -->

    <!-- section: works -->
    <section id="works" class="section">
        <div class="container clearfix">
            <h4>Our Works</h4>
            <div class="row">
                <div class="span12">
                    <div id="portfolio-wrap">
                        <!-- portfolio item -->
                        <div class="portfolio-item grid print photography">
                            <div class="portfolio">
                                <a href="{{ asset('web/img/works/big.jpg') }}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                    <img src="{{ asset('web/img/works/1.png') }}" alt="" />
                                    <div class="portfolio-overlay">
                                        <div class="thumb-info">
                                            <h5>Portfolio name</h5>
                                            <i class="icon-plus icon-2x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end portfolio item -->
                        <!-- portfolio item -->
                        <div class="portfolio-item grid print design web">
                            <div class="portfolio">
                                <a href="{{ asset('web/img/works/big.jpg') }}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                    <img src="{{ asset('web/img/works/2.png') }}" alt="" />
                                    <div class="portfolio-overlay">
                                        <div class="thumb-info">
                                            <h5>Portfolio name</h5>
                                            <i class="icon-plus icon-2x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end portfolio item -->
                        <!-- portfolio item -->
                        <div class="portfolio-item grid print design">
                            <div class="portfolio">
                                <a href="{{ asset('web/img/works/big.jpg') }}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                    <img src="{{ asset('web/img/works/3.png') }}" alt="" />
                                    <div class="portfolio-overlay">
                                        <div class="thumb-info">
                                            <h5>Portfolio name</h5>
                                            <i class="icon-plus icon-2x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end portfolio item -->
                        <!-- portfolio item -->
                        <div class="portfolio-item grid photography web">
                            <div class="portfolio">
                                <a href="{{ asset('web/img/works/big.jpg') }}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                    <img src="{{ asset('web/img/works/4.png') }}" alt="" />
                                    <div class="portfolio-overlay">
                                        <div class="thumb-info">
                                            <h5>Portfolio name</h5>
                                            <i class="icon-plus icon-2x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end portfolio item -->
                        <!-- portfolio item -->
                        <div class="portfolio-item grid photography web">
                            <div class="portfolio">
                                <a href="{{ asset('web/img/works/big.jpg') }}" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                                    <img src="{{ asset('web/img/works/5.png') }}" alt="" />
                                    <div class="portfolio-overlay">
                                        <div class="thumb-info">
                                            <h5>Portfolio name</h5>
                                            <i class="icon-plus icon-2x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end portfolio item -->
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
                <div class="span3">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{ asset('web/img/blog/img1.jpg') }}" alt="" />
                        </div>
                        <div class="post-meta">
                            <i class="icon-file icon-2x"></i>
                            <span class="date">June 19, 2013</span>
                            <span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#">New design trends</a></strong></h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                            </p>
                            <a href="#" class="more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{ asset('web/img/blog/img2.jpg') }}" alt="" />
                        </div>
                        <div class="post-meta">
                            <i class="icon-file icon-2x"></i>
                            <span class="date">June 19, 2013</span>
                            <span class="tags"><a href="#">Design</a>, <a href="#">News</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#">Retro is great</a></strong></h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                            </p>
                            <a href="#" class="more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{ asset('web/img/blog/img3.jpg') }}" alt="" />
                        </div>
                        <div class="post-meta">
                            <i class="icon-file icon-2x"></i>
                            <span class="date">June 22, 2013</span>
                            <span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#">Isometric mockup</a></strong></h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                            </p>
                            <a href="#" class="more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="home-post">
                        <div class="post-image">
                            <img class="max-img" src="{{ asset('web/img/blog/img4.jpg') }}" alt="" />
                        </div>
                        <div class="post-meta">
                            <i class="icon-file icon-2x"></i>
                            <span class="date">June 27, 2013</span>
                            <span class="tags"><a href="#">News</a>, <a href="#">Tutorial</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#">Free icon set</a></strong></h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                            </p>
                            <a href="#" class="more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blankdivider30"></div>
            <div class="aligncenter">
                <a href="#" class="btn btn-large btn-theme">More blog post</a>
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
                <div class="span12">
                    <div class="cform" id="contact-form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="row">
                                <div class="span6">
                                    <div class="field your-name form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="field your-email form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="field subject form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="field message form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <input type="submit" value="Send message" class="btn btn-theme pull-left">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ./span12 -->
            </div>
        </div>
    </section>
    @include('web.partials.footer')

    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
    @include('web.assets.js')

</body>

</html>
