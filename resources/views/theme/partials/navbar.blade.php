<div class="p-0 container-fluid position-relative">
    <nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
        <a href="" class="p-0 navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-map-marker-alt me-3"></i>Explore Wonders</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto">
                <a href=" {{ route('theme.index') }} " class="nav-item nav-link @yield('home-active')">Home</a>
                <a href="{{ route('theme.services') }}" class="nav-item nav-link @yield('services-active')">Services</a>
                <a href="{{ route('theme.destinations') }}" class="nav-item nav-link @yield('des-active')">Destination</a>
                <a href="{{ route('theme.packages') }}" class="nav-item nav-link @yield('package-active')">Packages</a>
                <a href="{{ route('theme.booking') }}" class="nav-item nav-link @yield('booking-active')">Booking</a>
                <a href="{{ route('theme.about') }}" class="nav-item nav-link @yield('about-active')">About</a>
                <a href="{{ route('theme.contact') }}" class="nav-item nav-link @yield('contact-active')">Contact</a>

            </div>
        </div>
        <div>

            @if (!Auth::check())
                <a href="{{ route('register') }}" class="px-4 py-2 btn btn-primary rounded-pill">Register/login</a>
            @else
                <div>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" Aria-expanded="False">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">

                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="nav-link" href="javascript:$('form').submit();">Logout</a>
                            </form>
                        </ul>
                    </li>
                </div>
            @endif

    </nav>

    <div class="py-5 mb-5 container-fluid bg-primary hero-header">
        <div class="container py-5">
            <div class="py-5 row justify-content-center">
                <div class="text-center col-lg-10 pt-lg-5 mt-lg-5">
                    <h1 class="mb-3 text-white display-3 animated slideInDown">@yield('text')</h1>



                    @yield('Path-area')
                </div>
            </div>
        </div>
    </div>
</div>
