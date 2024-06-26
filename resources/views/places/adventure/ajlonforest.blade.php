@extends('theme.master')
@section('title', 'Destinations')
@section('text', 'Destinations')
@section('des-active', 'active')
@section('page', 'Destinations')

@section('content')
    <!-- pic for site Start -->
    <div class="py-5 container-xxl destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Ajlon Forest</h6>
                <h3>Welcome to Ajloun Forest Reserve, a lush haven of biodiversity and natural beauty nestled in the rolling hills of northern Jordan. Whether you’re an avid nature enthusiast, a bird watcher, or someone looking for a peaceful escape, Ajloun Forest offers an unforgettable experience.</h3>
                <h6 class="px-3 text-center bg-white section-title text-primary">some Pics</h6>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/ajlonforest1.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/ajlonforest2.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/ajlonforest3.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="overflow-hidden position-relative d-block h-100" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/ajlonforest/ajlonforest4.jpg" alt=""
                            style="object-fit: cover; width: 100%;">
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- pic for site Start -->

    <!-- restaurants Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">restaurants</h6>
                <h1 class="mb-5">Some Restaurants</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/restaurant1.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="py-2 text-center flex-fill border-end">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Savor & Spice Bistro
                            </small>
                        </div>
                        <div class="p-4 text-center">
                            <h4 class="mb-0">Popular Cuisine</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Fresh seafood, ocean bounty.</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g1396864-d14905576-Reviews-Summaga_Cafe-Ajlun_Ajlun_Governorate.html" class="px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/restaurant2.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="py-2 text-center flex-fill border-end">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Rustic Plate Tavern
                            </small>
                        </div>
                        <div class="p-4 text-center">
                            <h4 class="mb-0">Organic Food</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Authentic Mexican fiesta.</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g1396864-d15695933-Reviews-Castle_View_Restaurant_and_Cafe-Ajlun_Ajlun_Governorate.html" class="px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/restaurant3.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="py-2 text-center flex-fill border-end">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Urban Eats Diner
                            </small>
                        </div>
                        <div class="p-4 text-center">
                            <h4 class="mb-0">Fast Food</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Health-conscious eats, vibrant flavors.</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g1396864-d24182510-Reviews-Jar_Al_Jabal_Resturant-Ajlun_Ajlun_Governorate.html" class="px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurants End -->

    <!-- Hotel Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Hotels</h6>
                <h1 class="mb-5">4 top Hotel</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/hotel1.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://m.facebook.com/kempinskihotels"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/kempinskiaqaba?igsh=bjk5dXh5enpua2N2"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Sunset Vista Resort</h5>
                            <small>Coastal tranquility, elegant rooms.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/hotel2.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://m.facebook.com/sheratonamman"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/sheratonamman?igsh=NHo0czV1a3I2dG9n"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Emerald Valley Hotel</h5>
                            <small>Countryside serenity, boutique.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/hotel3.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://m.facebook.com/AmmanRotana"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/sheratonamman?igsh=NHo0czV1a3I2dG9n"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Lakeside Manor Hotel</h5>
                            <small> Luxurious desert escape, spa.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ajlonforest/hotel4.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://m.facebook.com/AmmanRotana"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/ammanrotana?igsh=NXlsNHRzZTJ5Zjlh"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Royal Crest Lodge</h5>
                            <small>Opulent luxury, fine dining.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel End -->

    <!-- location Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Location</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.455078273594!2d35.7612222751545!3d32.38016070416228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7d17cb36d133%3A0x53bba70d2502bf6e!2z2YXYrdmF2YrYqSDYutin2KjYp9iqINi52KzZhNmI2YY!5e0!3m2!1sen!2sbd!4v1716150492886!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location End -->

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
