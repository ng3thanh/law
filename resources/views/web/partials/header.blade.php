@php
    $url = (Route::current()->getName() != 'main') ? route('main') : '';
@endphp
<header class="nav-header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <a href="{{ route('main') }}" class="navbar-brand">
                    {{ $logo->name or '' }}
                </a>
                <select id="select-language">
                    <option {{ checkLanguage('vi', 'selected') }} value="vi">Tiếng Việt</option>
                    <option {{ checkLanguage('en', 'selected') }} value="en">English</option>
                </select>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" title="team" href="{{ $url }}#about">{{ __('homepage.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link" title="services" href="{{ $url }}#services">{{ __('homepage.services_menu') }}</a></li>
                    <li class="nav-item"><a class="nav-link" title="works" href="{{ $url }}#works">{{ __('homepage.works') }}</a></li>
                    <li class="nav-item"><a class="nav-link" title="blog" href="{{ $url }}#blog">{{ __('homepage.blog') }}</a></li>
                    <li class="nav-item"><a class="nav-link" title="contact" href="{{ $url }}#contact">{{ __('homepage.contact') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>