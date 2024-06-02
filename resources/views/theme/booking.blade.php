
@extends('theme.master')
@section('title', 'Booking')
@section('text', 'Booking')
@section('booking-active', 'active')
@section('page', 'Booking')

@section('content')

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Explore and choose your perfect destination with us, we are offering all kinds of tourism experiences that are tailored to your interests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Book Your Trip Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Simplify your travel planning by booking your trip online. Choose your desired destinations, accommodations, and activities with ease.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Embark on Your Journey</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Get ready to experience the wonders of Jordan firsthand. Pack your bags and prepare for an unforgettable adventure!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Welcome to our seamless travel experience brought to you by Online
                            Booking. Say
                            goodbye to the hassles of traditional reservation methods and hello to convenience at
                            your
                            fingertips.</p>
                        <p class="mb-4">With our intuitive platform integrated into our tourist website, planning
                            your
                            dream getaway has never been easier. From booking accommodations in top-rated hotels to
                            securing
                            tickets for must-see attractions, Online Booking simplifies the journey from exploration
                            to
                            adventure. </p>
                        <p class="mb-4">Join us as we embark on a journey of effortless travel planning, all with
                            the
                            click of a button.</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('theme.booking.B') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email"
                                            name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1" name="destination"
                                            onchange="showOptions()">
                                            <option value="1">Adventure</option>
                                            <option value="2">Beach</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Historical</option>
                                            <option value="5">Religious</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>

                                    <div id="optionsList1" style="display: none;">
                                        <p>Select items for Adventure:</p>
                                        <div>
                                            <input type="checkbox" id="wadimujib" name="wadimujib">
                                            <label for="wadimujib">Wadi Mujib</label><br>
                                            <input type="checkbox" id="ajlounforest" name="ajlounforest">
                                            <label for="ajlounforest">Ajloun Forest</label><br>
                                            <input type="checkbox" id="dibeenforest" name="dibeenforest">
                                            <label for="dibeenforest">Dibeen Forest</label><br>
                                            <input type="checkbox" id="danabiospher" name="danabiospher">
                                            <label for="danabiospher">Dana Biosphere</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList2" style="display: none;">
                                        <p>Select items for Beach:</p>
                                        <div>
                                            <input type="checkbox" id="Aqaba" name="Aqaba">
                                            <label for="Aqaba">Aqaba</label><br>
                                            <input type="checkbox" id="DeadSea" name="DeadSea">
                                            <label for="DeadSea">Dead Sea</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList3" style="display: none;">
                                        <p>Select items for Cultural:</p>
                                        <div>
                                            <input type="checkbox" id="ovalplazainjerash" name="ovalplazainjerash">
                                            <label for="ovalplazainjerash">Oval Plaza in Jerash</label><br>
                                            <input type="checkbox" id="ammancitadel" name="ammancitadel">
                                            <label for="ammancitadel">Amman Citadel</label><br>
                                            <input type="checkbox" id="shobakcastle" name="shobakcastle">
                                            <label for="shobakcastle">Shobak Castle</label><br>
                                            <input type="checkbox" id="ajloncastle" name="ajloncastle">
                                            <label for="ajloncastle">Ajlon Castle</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList4" style="display: none;">
                                        <p>Select items for Historical:</p>
                                        <div>
                                            <input type="checkbox" id="petra" name="petra">
                                            <label for="petra">Petra</label><br>
                                            <input type="checkbox" id="UmmQais" name="UmmQais">
                                            <label for="UmmQais">Umm Qais</label><br>
                                            <input type="checkbox" id="KarakCastel" name="KarakCastel">
                                            <label for="KarakCastel">Karak Castel</label><br>
                                            <input type="checkbox" id="QasrAmra" name="QasrAmra">
                                            <label for="QasrAmra">Qasr Amra</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList5" style="display: none;">
                                        <p>Select items for Religious:</p>
                                        <div>
                                            <input type="checkbox" id="BaptismSite" name="BaptismSite">
                                            <label for="BaptismSite">Baptism Site</label><br>
                                            <input type="checkbox" id="MountNebo" name="MountNebo">
                                            <label for="MountNebo">Mount Nebo</label><br>
                                            <input type="checkbox" id="Al-Maghtas" name="Al-Maghtas">
                                            <label for="Al-Maghtas">Al-Maghtas</label><br>
                                            <input type="checkbox" id="NabiMusa" name="NabiMusa">
                                            <label for="NabiMusa">Nabi Musa site</label><br>
                                        </div>
                                    </div>

                                    <!-- Add similar divs for other destination options -->
                                    <script>
                                        function showOptions() {
                                            var select = document.getElementById("select1");
                                            var selectedOption = select.options[select.selectedIndex].value;

                                            // Hide all option lists
                                            var optionLists = document.querySelectorAll("[id^=optionsList]");
                                            optionLists.forEach(function(list) {
                                                list.style.display = "none";
                                            });

                                            // Show the selected option's list
                                            document.getElementById("optionsList" + selectedOption).style.display = "block";
                                        }

                                        function calculateCost() {
                                            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                                            var selectedOptions = checkboxes.length;

                                            var personCount = document.getElementById("personCount").value;
                                            var multiplier = parseInt(personCount);

                                            var baseCost = 20;
                                            var cost = selectedOptions * baseCost * multiplier;
                                            document.getElementById("costMessage").innerText = "Cost: $" + cost;

                                            // Set the calculated cost in the hidden input field
                                            document.getElementById("calculatedCost").value = cost;
                                        }
                                    </script>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="personCount" name="numofpeople">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 or more</option>
                                        </select>
                                        <label for="personCount">Number of Persons</label>
                                    </div>
                                </div>

                                <input type="hidden" id="calculatedCost" name="cost">
                                <div class="col-12" id="costMessage" name="costMessage">Cost: $0</div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" name="request"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book
                                        Now</button>
                                </div>
                                
                            </div>
                        </form>
                        <button class="btn btn-primary" onclick="calculateCost()">Calculate Cost</button>
                        <form action="{{ route('payment.index') }}" method="get" id="paymentForm">
                            <div class="col-6">
                                <button class="btn btn-outline-light w-100 py-3" type="submit" form="paymentForm">Make Payment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking end -->
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
