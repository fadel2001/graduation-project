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
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
                <h3 class="mb-5">Choose Tourism Type </h3>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                    <span class="fs-5">Tourism Type</span>
                </a>
                <div class="dropdown-menu m-0 dropdown-menu-lg">
                    <a href="{{ route('categories.adventure') }}" class="dropdown-item active">Adventure</a>
                    <a href="{{ route('categories.beach') }}" class="dropdown-item">Beach</a>
                    <a href="{{ route('categories.cultural') }}" class="dropdown-item">Cultural</a>
                    <a href="{{ route('categories.historical') }}" class="dropdown-item">Historical</a>
                    <a href="{{ route('categories.religious') }}" class="dropdown-item">Religious</a>
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
