<!DOCTYPE html>
<html lang="en">
    <head>
      @include('theme.partials.head')

    </head>
    <body>
        @include('theme.partials.topbar')
        @include('theme.partials.navbar')

        <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-5">
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                      <div class="position-relative h-100">
                          <img class="img-fluid position-absolute w-99 h-120" src="{{ asset('assets') }}/img/pkg2.jpeg"
                              alt="" style="object-fit: cover;">
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 text-left">
                        <table class="table table-striped ml-2">
                            <tr>
                              <td>Date:</td>
                              <td>June 15</td>
                            </tr>
                            <tr>
                              <td>Duration:</td>
                              <td>Full day</td>
                            </tr>
                            <tr>
                              <td>Pick-up Time:</td>
                              <td>9 AM</td>
                            </tr>
                            <tr>
                              <td>Pick-up Locations:</td>
                              <td>Amman , Jreash , Irbed</td>
                            </tr>
                            <tr>
                              <td>Number of people:</td>
                              <td>3 Persons</td>
                            </tr>
                        </table>
                    </div>
                    {{-- <div>
                        <img src="{{ asset('assets') }}/img/pkg1.jpeg" alt="">
                    </div> --}}
                </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                      <h6 class="section-title bg-white text-start text-primary pe-3">Package 2</h6>
                      <h2 class="mb-4">Aqaba|| Petra</span></h2>
                      <h2 class="mb-4">Petra and Aqaba, Two of Jordan's Most Famous Destinations</span></h2>
                      <p class="mb-4">Get ready for an inspiring adventure to the most famous destinations in Jordan aqaba and petra. </p>
                      <p class="mb-4">Our journey begins in Petra, one of the seven wonders of the world. Immerse yourself in the timeless beauty and enchantment of this ancient city, creating memories that will last a lifetime.</p>
                      <p class="mb-4">As we continue our trip, we'll make our way to Aqaba, where the excitement reaches new heights. </p>
                      <p class="mb-4">There you will have many activities like parachuting, diving nto the crystal-clear waters of the Red Sea and shopping and at the end you will have a se food dinner (as an food option)</p>
                      <div class="row gy-2 gx-4 mb-4">
                          <div class="col-sm-6">
                              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Carefully selected packages
                              </p>
                          </div>
                          <div class="col-sm-6">
                              <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Constantly updated information</p>
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
                      <p class="text-center"><span class="highlight" style="background-color: lightgreen;">Join us on this extraordinary adventure and unlock the wonders of Jordan. Book your journey to Aqaba and Petra today!</span></p>
        
        
        
                  </div>
              </div>
          </div>
        </div>
    </body>
    @include('theme.partials.footer') 
</html>










