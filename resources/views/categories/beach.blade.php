@extends('theme.master')
@section('title', 'Destinations')
@section('text', 'Destinations')
@section('des-active', 'active')
@section('page', 'Destinations')

@section('content')
    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Beach</h6>
                <h1 class="mb-5">Popular Places</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('places.aqaba') }}">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/aqaba1.jpg" alt=""
                                    style="width: 100%;">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Aqaba</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('places.deadsea') }}">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/deadsea/deadsea1.jpg" alt=""
                            style="object-fit: cover; width: 100%;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
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
            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection
