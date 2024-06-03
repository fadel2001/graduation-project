@extends('theme.master')
@section('title', 'Destinations')
@section('text', 'Destinations')
@section('des-active', 'active')
@section('page', 'Destinations')

@section('content')
    <!-- Destination Start -->
    <div class="py-5 container-xxl destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Adventure</h6>
                <h3>Are you an adrenaline junkie? Dive into a world of excitement with our adventure tourism options. From mountain climbing  to skydiving and bungee jumping, thrill-seekers will find endless opportunities for heart-pounding experiences.</h3>
                <h1>_</h1>
                <h1>               </h1>
                <h1 class="mb-5">Popular Places</h1>

            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="overflow-hidden position-relative d-block" href="{{ route('places.wadimujib') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/wadimujib/wadimujib1.jpg"
                                    alt="" style="width: 100%;">
                                <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">
                                    30% OFF</div>
                                <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                                    Wadi Al-Mujib</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="overflow-hidden position-relative d-block" href="{{ route('places.ajlonforest') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/ajlonforest2.jpg"
                                    alt="" style="width: 100%;">
                                <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">
                                    25% OFF</div>
                                <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                                    Ajloun Forest Reserve</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="overflow-hidden position-relative d-block" href="{{ route('places.danareserve') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/danareserve/danareserve1.jpg"
                                    alt="" style="width: 100%;">
                                <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">
                                    35% OFF</div>
                                <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                                    Dana Biosphere Reserve</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="overflow-hidden position-relative d-block h-100" href="{{ route('places.dibeenforest') }}">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/dibeenforest/dibeenforest3.jpg" alt=""
                            style="object-fit: cover; width: 100%;">
                        <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">20% OFF
                        </div>
                        <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                            Dibeen Forest Reserve</div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Destination Start -->
@endsection

@section('Path-area')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="text-white breadcrumb-item active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection
