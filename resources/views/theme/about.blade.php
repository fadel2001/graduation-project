@extends('theme.master')
@section('title', 'About')
@section('text', 'About Us')
@section('about-active', 'active')
@section('page', 'About')

@section('content')
    <!-- About Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-99 h-120" src="{{ asset('assets') }}/img/welcome.jpeg"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="bg-white section-title text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Explore Wonder</span></h1>
                    <p class="mb-4">A website dedicated to tourism in Jordan providing comprehensive information about
                        tourist attractions, events, accommodation services and restaurants. With a user-friendly design and
                        offering content in English, the website includes visitor reviews, information on transportation and
                        recreational activities, promotion of cultural and natural experiences in Jordan, and
                        tourist-favorite restaurants Which contributes to attracting visitors and enhancing their tourism
                        experience.</p>
                    <p class="mb-4">ًWe like you ,are very upset about committing to a mandatory travel program. That is
                        why we have given each person the opportunity to draw his own journey and write his story with his
                        own hand.</p>

                    <div class="mb-4 row gy-2 gx-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Carefully selected packages
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Constantly updated
                                information</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Premium
                                Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <p class="text-center"><span class="highlight" style="background-color: lightgreen;">We hope that all
                            stories end in beautiful way</span></p>



                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@section('Path-area')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="text-white breadcrumb-item active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection

<!-- Team Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="px-3 text-center bg-white section-title text-primary">Website Admins</h6>
            <h1 class="mb-5">Meet Our Admins</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/team-1.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="mx-1 btn btn-square"
                            href="https://www.facebook.com/share/RavrFWxkfPGcXPcc/?mibextid=qi2Omg"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href="mailto:fmbatayneh20@cit.just.edu.jo"><i
                                class="fas fa-envelope"></i></a>
                        <a class="mx-1 btn btn-square"
                            href="https://www.instagram.com/fadel_bataineh?igsh=MXRtY2g3ZHZzazBvbQ=="><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="p-4 text-center">
                        <h5 class="mb-0">Fadel Batayneh</h5>
                        <big>Leader</big>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/team-2.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="mx-1 btn btn-square"
                            href="https://www.facebook.com/share/9gfXm5UJgcJccf24/?mibextid=qi2Omg"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href="mailto:ndalomari20@cit.just.edu.jo"><i
                                class="fas fa-envelope"></i></a>
                        <a class="mx-1 btn btn-square"
                            href="https://www.instagram.com/itss_nada02?igsh=a2Q3djExaHczb2o0"><i
                                class="fab fa-instagram"></i></a>
                    </div>

                    <div class="text-center p-4">
                        <h5 class="mb-0">Nada Al-Omari</h5>
                        <small>Develpoer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/team-3.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="mx-1 btn btn-square"
                            href="https://www.facebook.com/share/SKEWziMkLrd68YAK/?mibextid=qi2Omg"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href="mailto:smobiedat20@cit.just.edu.jo"><i
                                class="fas fa-envelope"></i></a>
                        <a class="mx-1 btn btn-square"
                            href="https://www.instagram.com/sajaobeidat19?igsh=dGkyd2o2NGdyenE2"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="p-4 text-center">
                        <h5 class="mb-0">Saja Obidat</h5>
                        <small>Develpoer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/team-4.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="mx-1 btn btn-square"
                            href="https://www.facebook.com/share/PswL6wwvTKc9a6qB/?mibextid=qi2Omg"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href="mailto:ialmazari20@cit.just.edu.jo"><i
                                class="fas fa-envelope"></i></a>

                        <a class="mx-1 btn btn-square"
                            href="https://www.instagram.com/ikram.almazari?igsh=MWhnbnJvbXd5cG44dA=="><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="p-4 text-center">
                        <h5 class="mb-0">Ikram Al-Mazari</h5>
                        <big>Designer</big>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="px-3 text-center bg-white section-title text-primary">Explore Wonder Sponsers</h3>
            <h1 class="mb-5">4 top Sponsers</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/Expedia.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="mx-1 btn btn-square"
                            href="https://www.expedia.com/Cars?locale=en_US&siteid=1&semcid=US.B.GOOGLE.BT-c-EN.CAR&semdtl=a118255096950.b1139506546617.g1kwd-396244913.e1c.m1Cj0KCQjw0_WyBhDMARIsAL1Vz8tcfFiOE0eaw8HFUO3XSLdSkvpFfAeEVxAt9l0_fHO6Tso1ByGWYlMaAkuPEALw_wcB.r1f66e41a5ac91de8f49c69c3d61e7d82b839697edbf3aea64e36c1cefe6619cba.c1cJi46vaJwA7J4yxspFZ2kw.j19069818.k1.d1624810779661.h1e.i1.l1.n1.o1.p1.q1.s1.t1.x1.f1.u1.v1.w1&gad_source=1&gclid=Cj0KCQjw0_WyBhDMARIsAL1Vz8tcfFiOE0eaw8HFUO3XSLdSkvpFfAeEVxAt9l0_fHO6Tso1ByGWYlMaAkuPEALw_wcB"><i
                                class="fab fa-google"></i></a>


                    </div>
                    <div class="p-4 text-center">
                        <h5 class="mb-0">Expedia</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/hyndai.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
<<<<<<< HEAD
                        <a class="mx-1 btn btn-square" href=" https://www.facebook.com/HyundaiJordan/"><i class="fab fa-facebook"></i></a>
=======

                        <a class="mx-1 btn btn-square" href="https://www.instagram.com/beitsitti/?hl=en"><i
                                class="fab fa-instagram"></i></a>
>>>>>>> 470a2a1272b6ecdff6d7c71cecddbce1a1f1a05a
                    </div>

                    <div class="p-4 text-center">

                        <h5 class="mb-0">Hondai</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/fine.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
<<<<<<< HEAD
                        <a class="mx-1 btn btn-square" href="https://jordan.finestore.com/"><i class="fab fa-google"></i></a>
=======
                        <a class="mx-1 btn btn-square" href="https://www.wejhtak.com/ar/site/sections"><i
                                class="fab fa-google"></i></a>
>>>>>>> 470a2a1272b6ecdff6d7c71cecddbce1a1f1a05a


                    </div>
                    <div class="p-4 text-center">
                        <h5 class="mb-0">Fine</h5>

                    </div>
                </div>
            </div>


@endsection
