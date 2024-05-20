@extends('theme.master')
@section('title', 'Destinations')
@section('text', 'Destinations')
@section('des-active', 'active')
@section('page', 'Destinations')

@section('content')
    <!-- pic for site Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">amman citadel</h6>
                <h1 class="mb-5">Some Pic</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/ammancitadel1.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img//ammancitadel/ammancitadel2.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/ammancitadel3.jpg"
                                    alt="" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('assets') }}/img/ammancitadel/ammancitadel4.jpg" alt=""
                            style="object-fit: cover; width: 100%;">
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- pic for site Start -->

    <!-- restaurants Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">restaurants</h6>
                <h1 class="mb-5">Some Restaurants</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/restaurant1.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Savor & Spice Bistro
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h4 class="mb-0">Popular Cuisine</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://cdn.qr-code-generator.com/account9821055/44809625_4.pdf?Expires=1716319016&Signature=RPArvghRU8ZghZWw5BoAU85etSMMYRhhb3xKOb-EsWZD1LgXbkvvt5m5Vqb-pDdZLT29CtcZqQ1txG8kuAJGyhA3HBxnVjiMoxqhUnuS9aUvRd1U-xGH4Y7i9zFlpmFbl2nNdUi73KjcrAjF7w5IzlUp~-XgKzLW6uh7LZ0dN0e-Ch4dJMYOeoewLiRqRP3s4aUPzBsZDiimDmXX6Dmm-4QcBcsxy2CL4Gl2FlAhdW4rNcEkHATbhaXrDe0vgl5LPmKGvmEQ4MSSFUBc6S5XZag9LM2U9doOqi-V0uX13HZmHs1WND92GO~QLeLvyH787Eki4frEjgedBQ0TUrrOZw__&Key-Pair-Id=KKMPOJU8AYATR" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/restaurant2.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Rustic Plate Tavern
                            </small>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0">Organic Food</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="http://abu-jbara.com/" class="btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 30px 30px 30px;">Show Page</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/restaurant3.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fas fa-utensils text-primary me-2"></i>
                                Urban Eats Diner
                            </small>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0">Fast Food</h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="https://www.aldayaa.net/" class="btn btn-sm btn-primary px-3 border-end"
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Hotels</h6>
                <h1 class="mb-5">4 top Hotel</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/hotel1.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/CentroMadaAmman"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/CentroMadaAmman/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sunset Vista Resort</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/hotel2.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/LandmarkAmman/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/landmarkhotelamman/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Emerald Valley Hotel</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/hotel3.jpg" alt=""
                                style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/shamsalweibdehapartments"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/shams_alweibdeh_hotel/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Lakeside Manor Hotel</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/ammancitadel/hotel4.jpg"
                                alt="" style="width: 100%;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/RadissonHotels/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/RadissonHotels/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Location</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.271882713637!2d35.93236397513703!3d31.953520025615216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5f96539bcc23%3A0x83d61bcf8e637e6d!2sAmman%20Citadel!5e0!3m2!1sen!2sjo!4v1716233480542!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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
            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection
