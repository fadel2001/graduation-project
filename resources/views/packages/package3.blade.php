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
                          <img class="img-fluid position-absolute w-99 h-120" src="{{ asset('assets') }}/img/pkg3.jpeg"
                              alt="" style="object-fit: cover;">
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 text-left">
                        <table class="table table-striped ml-2">
                            <tr>
                              <td>Date:</td>
                              <td>June 25</td>
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
                              <td>2 Persons</td>
                            </tr>
                        </table>
                    </div>
                    {{-- <div>
                        <img src="{{ asset('assets') }}/img/pkg1.jpeg" alt="">
                    </div> --}}
                </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                      <h6 class="section-title bg-white text-start text-primary pe-3">Package 3</h6>
                      <h2 class="mb-4">DeadSea||DibeenForest</span></h2>
                      <h2 class="mb-4">Embark on an Unforgettable Adventure to Dibbeen Forest and the Majestic Dead Sea</span></h2>
                      <p class="mb-4">Immerse yourself in a truly extraordinary journey tailored for adventure enthusiasts like you. Prepare for an amazing experience amidst the captivating landscapes of Dibbeen Forest, where thrilling hiking trails await and breathtaking nature surrounds you. Indulge in a delightful picnic breakfast amidst the serene wilderness, followed by an enchanting sunset walk in the wildlife. </p>
                      <p class="mb-4">The adventure doesn't end there. We'll then continue our expedition to the awe-inspiring Dead Sea, where luxury and relaxation await. Spend a memorable night at one of the finest resorts, indulging in a sumptuous dinner, and wake up to the stunning views of the Dead Sea. </p>
                      <p class="mb-4">We'll back to Amman, filled with unforgettable memories and a renewed spirit of adventure. </p>
                      <p class="mb-4">Don't miss out on this extraordinary experience, perfect for two adventurous souls. Book your journey to Dibbeen Forest and the Dead Sea today!</p>
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
                      <p class="text-center"><span class="highlight" style="background-color: lightgreen;">Join us on this extraordinary adventure and unlock the wonders of Jordan. Book your journey today!</span></p>
        
        
        
                  </div>
              </div>
          </div>
        </div>
    </body>
    @include('theme.partials.footer') 
</html>










