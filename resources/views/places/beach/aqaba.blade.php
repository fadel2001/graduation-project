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
                <h3 class="px-3 text-center bg-white section-title text-primary">Aqaba</h3>
                <h3>Welcome to Aqaba, Jordan's only coastal city, nestled along the Red Sea. Known for its crystal-clear waters, vibrant coral reefs, and rich history, Aqaba offers a perfect blend of relaxation, adventure, and cultural experiences. Whether you're seeking underwater adventures, beachside relaxation, or exploring historical sites, Aqaba has something for everyone.</h3>
                <h3 class="px-3 text-center bg-white section-title text-primary">some pic</h3>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/aqaba1.jpg" alt=""
                                    style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img//aqaba/aqaba2.jpg" alt=""
                                    style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/aqaba3.jpg" alt=""
                                    style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="overflow-hidden position-relative d-block h-100" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/aqaba/aqaba4.jpg" alt=""
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
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/restaurant1.jpg" alt=""
                                style="width: 100%;">
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
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g298101-d15096058-Reviews-Firefly_Burger_Aqaba-Aqaba_Al_Aqabah_Governorate.html" class="px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/restaurant2.jpg" alt=""
                                style="width: 100%;">
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
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://khubzaseneya.com/" class="px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/restaurant3.jpg" alt=""
                                style="width: 100%;">
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
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="mb-2 d-flex justify-content-center">
                                <a href="https://www.captains.jo/home.aspx?s=2&l=1&pg=1" class="px-3 btn btn-sm btn-primary border-end"
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
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/hotel1.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square"
                                href="https://www.facebook.com/share/hKSUCCU4cZ6KYcAL/?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/movenpickamman?igsh=OWN0d3JkczUwOTk="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Sunset Vista Resort</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/hotel2.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square"
                                href="https://www.facebook.com/share/oe1yeThp6VxijD3W/?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/gerasahotel?igsh=MXEzczBjbW5oNDV0Mg=="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Emerald Valley Hotel</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/hotel3.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://www.facebook.com/LeRoyalAmman?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/leroyalamman_?igsh=aHVzcThvN2VhZDc1"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Lakeside Manor Hotel</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/aqaba/hotel4.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="mx-1 btn btn-square" href="https://www.facebook.com/crowneplaza?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square"
                                href="https://www.instagram.com/crowneplazadeadsea?igsh=ZHlmYjA3cGt6NjVy"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Royal Crest Lodge</h5>
                            <small>Designation</small>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222065.38987871853!2d34.91032344299061!3d29.58124473948577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15007039ff2efa81%3A0x595faa556d2e6acc!2sAqaba%2C%20Jordan!5e0!3m2!1sen!2sbd!4v1716151340024!5m2!1sen!2sbd"
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
