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
                <h3 class="px-3 text-center bg-white section-title text-primary">Beach</h3>
                <h3>Welcome to your dream beach vacation! Whether you're looking to relax under the sun, explore underwater worlds, or enjoy vibrant coastal cultures, our beach tourism options cater to all your desires. Choose from a variety of stunning beach destinations and let us help you create unforgettable seaside memories.</h3>
                <h3 class="px-3 text-center bg-white section-title text-primary">Popular places</h3>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="overflow-hidden position-relative d-block" href="{{ route('places.aqaba') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/aqaba1.jpg" alt=""
                                    style="width: 100%;">
                                <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">
                                    30% OFF</div>
                                <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                                    Aqaba</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="overflow-hidden position-relative d-block h-100" href="{{ route('places.deadsea') }}">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/deadsea/deadsea1.jpg" alt=""
                            style="object-fit: cover; width: 100%;">
                        <div class="top-0 px-2 py-1 m-3 bg-white text-danger fw-bold position-absolute start-0">20% OFF
                        </div>
                        <div class="bottom-0 px-2 py-1 m-3 bg-white text-primary fw-bold position-absolute end-0">
                            Dead Sea</div>
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
