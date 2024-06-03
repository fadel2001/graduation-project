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
                <h6 class="px-3 text-center bg-white section-title text-primary">Destination</h6>

                <h1 class="mb-5">Choose the type of tourism that best fits your interests and let us help you create unforgettable memories.</h1>
                <h3 class="mb-5">Choose Tourism Type </h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center"> <!-- Center the dropdown menu -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" style="background-color: #669933; color: black; padding: 10px 20px;"> <!-- Apply background, text color, and padding here -->
                                <span class="fs-5">Tourism Type</span>
                            </a>
                            <div class="m-0 dropdown-menu dropdown-menu-lg"> <!-- Apply background color here -->
                                <a href="{{ route('categories.adventure') }}" class="dropdown-item active" style="color: black;">Adventure</a> <!-- Apply text color here -->
                                <a href="{{ route('categories.beach') }}" class="dropdown-item" style="color: black;">Beach</a> <!-- Apply text color here -->
                                <a href="{{ route('categories.cultural') }}" class="dropdown-item" style="color: black;">Cultural</a> <!-- Apply text color here -->
                                <a href="{{ route('categories.historical') }}" class="dropdown-item" style="color: black;">Historical</a> <!-- Apply text color here -->
                                <a href="{{ route('categories.religious') }}" class="dropdown-item" style="color: black;">Religious</a> <!-- Apply text color here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Destination End -->
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
