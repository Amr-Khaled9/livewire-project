<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('front.index') }}" class="navbar-brand p-0">
            <h1 class="m-0">DGital</h1>
            <!-- <img src="{{asset('front-assets')}}/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('front.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('front.index') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ route('front.about') }}"
                    class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ route('front.service') }}"
                    class="nav-item nav-link {{ request()->routeIs('front.service') ? 'active' : '' }}">
                    Service
                </a>

                <a href="{{ route('front.project') }}"
                    class="nav-item nav-link {{ request()->routeIs('front.project') ? 'active' : '' }}">
                    Project
                </a>

                <a href="{{ route('front.contact') }}"
                    class="nav-item nav-link {{ request()->routeIs('front.contact') ? 'active' : '' }}">
                    Contact
                </a>
            </div>
             <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </nav>
    
</div>