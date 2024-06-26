@extends('theme.master')
@section('title', 'Index')

@section('home-active', 'active')
@section('text', 'Enjoy Your Trip With Us!')

@section('content')
    <!-- About Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="bg-white section-title text-start text-primary pe-3">Hello in JORDAN</h6>

                    <h1 class="mb-4">Welcome to <span class="text-primary">Explore Wonder</span></h1>
                    <p class="mb-4">
                    <p>Welcome to Explore Wonder, your ultimate guide to the enchanting land of Jordan. Discover ancient
                        cities, breathtaking landscapes, and a rich cultural heritage that dates back millennia.
                        Whether you're seeking adventure in the desert, relaxation by the Dead Sea, or a journey through
                        history in Petra, Jordan has something for every traveler.
                        Embark on a journey of discovery and let us help you create unforgettable memories in this
                        remarkable country.</p>.</p>


                    <p class="text-center"><span class="highlight" style="background-color: lightgreen;"> From North To South
                            ,Welcome</span></p>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <video width="800" height="370" loop autoplay muted>
                        <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">


                </div>
            </div>
            <!-- About End -->


            <div class="py-5 container-xxl">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="px-3 text-center bg-white section-title text-primary">Explore Wonder Wall</h3>
                        <div class="image-row" display: flex>
                            <img class="img-fluid" src="{{ asset('assets') }}/img/gaza.jpg" alt="">

                        </div>

                        <!-- airlines Start -->
                        <div class="py-5 container-xxl">
                            <div class="container">
                                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <h3 class="px-3 text-center bg-white section-title text-primary">Travel airlines</h3>
                                    <h1 class="mb-5">4 top airlines</h1>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/airline/royal.jpg"
                                                    alt="">
                                            </div>
                                            <div class="position-relative d-flex justify-content-center"
                                                style="margin-top: -19px;">
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.facebook.com/RoyalJordanian"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.instagram.com/royaljordanian?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="p-4 text-center">
                                                <h5 class="mb-0">Royal Jordanian</h5>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="team-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/airline/jordan.jpg"
                                                    alt="">
                                            </div>
                                            <div class="position-relative d-flex justify-content-center"
                                                style="margin-top: -19px;">
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.facebook.com/JordanAviationTours"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.instagram.com/jordanaviation_jav?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="p-4 text-center">
                                                <h5 class="mb-0">Jordan aviation</h5>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="team-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/airline/wizz.jpg"
                                                    alt="">
                                            </div>
                                            <div class="position-relative d-flex justify-content-center"
                                                style="margin-top: -19px;">
                                                <a class="mx-1 btn btn-square" href="https://www.facebook.com/wizzair"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.instagram.com/wizzair?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="p-4 text-center">
                                                <h5 class="mb-0">Wizz air</h5>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="team-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/airline/arabia.jpg"
                                                    alt="">
                                            </div>
                                            <div class="position-relative d-flex justify-content-center"
                                                style="margin-top: -19px;">
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.facebook.com/airarabiagroup"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="mx-1 btn btn-square"
                                                    href="https://www.instagram.com/airarabiagroup?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                                        class="fab fa-instagram"></i></a>
                                            </div>
                                            <div class="p-4 text-center">
                                                <h5 class="mb-0">Air Arabia</h5>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- airlines End -->

                    @endsection
