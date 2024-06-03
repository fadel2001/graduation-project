@extends('theme.master')
@section('title', 'Packages')
@section('text', 'Packages')
@section('package-active', 'active')
@section('page', 'Packages')

@section('content')
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <div class="image-container">
                                <a href="{{ route('places.ajloncastle') }}">
                                    <img class="img-fluid" src="{{ asset('assets') }}/img/ajloncastle/ajloncastle2.jpg"
                                        alt="" style="width: 100%;">
                                </a>
                                <a href="{{ route('places.ummqais') }}">
                                    <img class="img-fluid" src="{{ asset('assets') }}/img/ummqais/ummqais1.jpg"
                                        alt="" style="width: 100%;">
                                </a>
                                <a href="{{ route('places.ajlonforest') }}">
                                    <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/ajlonforest1.jpg"
                                        alt="" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>AjlonCastle|UmmQais|
                                AjlonForest</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>12 Jun</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$25</h3> $<del>45</del>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            {{-- <p>One-day journey through Northern Jordan, exploring the historic Ajloun Castle, ancient ruins of Umm Qais, and Ajloun Forest. Join us on June 12 for an unforgettable adventure, all for just $25 per person!</p> --}}
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('readmore.package1') }}" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{ route('theme.booking') }}" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <a href="{{ route('places.aqaba') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/aqaba1.jpg" alt="">
                            </a>
                            <a href="{{ route('places.petra') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/petra/petra1.jpg" alt="">
                            </a>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Aqaba|Petra</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>15 june</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>3
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$60</h3> $<del>85</del>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            {{-- <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p> --}}
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('readmore.package2') }}" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{ route('theme.booking') }}" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <a href="{{ route('places.deadsea') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/deadsea/deadsea1.jpg" alt="">
                            </a>
                            <a href="{{ route('places.dibeenforest') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/dibeenforest/dibeenforest1.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>DeadSea|DibeenForest</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>25 june</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$90</h3> $<del>150</del>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('readmore.package3') }}" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{ route('theme.booking') }}" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Explore and choose your perfect destination with us, we are offering all kinds of tourism experiences that are tailored to your interests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Book Your Trip Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Simplify your travel planning by booking your trip online. Choose your desired destinations, accommodations, and activities with ease.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Embark on Your Journey</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Get ready to experience the wonders of Jordan firsthand. Pack your bags and prepare for an unforgettable adventure!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

@endsection


@section('Path-area')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection
