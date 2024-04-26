<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="{{ asset('assets') }}/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href=" {{route('theme.index')}} " class="nav-item nav-link @yield('home-active')">Home</a>
                <a href="{{route('theme.services')}}" class="nav-item nav-link @yield('services-active')">Services</a>
                <a href="{{route('theme.destinations')}}" class="nav-item nav-link @yield('des-active')">Destination</a>
                <a href="{{route('theme.packages')}}" class="nav-item nav-link @yield('package-active')">Packages</a>
                <a href="{{route('theme.booking')}}" class="nav-item nav-link @yield('booking-active')">Booking</a>
                <a href="{{route('theme.about')}}" class="nav-item nav-link @yield('about-active')">About</a>
                <a href="{{route('theme.contact')}}" class="nav-item nav-link @yield('contact-active')">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">@yield('text')</h1>
                    {{-- <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet
                        diam et eos erat ipsum lorem sit</p> --}}
                    @yield('search-area')
                        {{-- search area --}}
                    {{-- <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Eg: Thailand">
                        <button type="button"
                            class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                            style="margin-top: 7px;">Search</button>
                    </div> --}}

                    @yield('Path-area')
                    {{-- Path area --}}
                    {{-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page')</li>
                        </ol>
                    </nav> --}}
                </div>
            </div>
        </div>
    </div>
</div>