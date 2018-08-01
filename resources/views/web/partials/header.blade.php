@php
    $url = (Route::current()->getName() != 'main') ? route('main') : '';
@endphp
<header class="nav-header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <a href="{{ route('main') }}" class="navbar-brand">Bootstrap Blog</a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" title="team" href="{{ $url }}#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" title="services" href="{{ $url }}#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" title="works" href="{{ $url }}#works">Works</a></li>
                    <li class="nav-item"><a class="nav-link" title="blog" href="{{ $url }}#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" title="contact" href="{{ $url }}#contact">Contact</a></li>
                </ul>
                <ul class="langs navbar-text"><a href="#" class="active">VN</a><span> </span><a href="#">EN</a></ul>
            </div>
        </div>
    </nav>
</header>