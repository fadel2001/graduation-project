<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            {{-- <img src="{{ asset('assets') }}/img/logo.png" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href=" {{ route('theme.index') }} " class="nav-item nav-link @yield('home-active')">Home</a>
                <a href="{{ route('theme.services') }}" class="nav-item nav-link @yield('services-active')">Services</a>
                <a href="{{ route('theme.destinations') }}" class="nav-item nav-link @yield('des-active')">Destination</a>
                <a href="{{ route('theme.packages') }}" class="nav-item nav-link @yield('package-active')">Packages</a>
                <a href="{{ route('theme.booking') }}" class="nav-item nav-link @yield('booking-active')">Booking</a>
                <a href="{{ route('theme.about') }}" class="nav-item nav-link @yield('about-active')">About</a>
                <a href="{{ route('theme.contact') }}" class="nav-item nav-link @yield('contact-active')">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">@yield('text')</h1>

                    @yield('search-area')

                    @yield('Path-area')
                </div>
            </div>
        </div>
    </div>
</div>
