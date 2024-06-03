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
                          <img class="img-fluid position-absolute w-99 h-120" src="{{ asset('assets') }}/img/pkg1.jpeg"
                              alt="" style="object-fit: cover;">
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 text-left">
                        <table class="table table-striped ml-2">
                            <tr>
                              <td>Date:</td>
                              <td>June 12</td>
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
                      <h6 class="section-title bg-white text-start text-primary pe-3">Package 1</h6>
                      <h2 class="mb-4">AjlonCastle || UmmQais || AjlonForest</span></h2>
                      <p class="mb-4">Get ready for a full day of adventure and wonder as we set off in the morning from our pick-up location. Our first stop will be at Um Qais in Irbid, where we'll indulge in a delicious breakfast at Al Yamamah Restaurant, known for its picturesque views.</p>
                      <p class="mb-4">After breakfast, we'll explore the historical landmarks of Um Qais before heading to Ajloun Castle and Forest. As we ascend to the castle, we'll take the telefreak and enjoy breathtaking views of the surrounding landscapes.</p>
                      <p class="mb-4">Once we reach Ajloun Castle, we'll immerse ourselves in the rich history of the region and discover the enchanting Ajloun Forests. This will be followed by a delightful dinner in the area, before returning home with unforgettable memories.</p>
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
                      <p class="text-center"><span class="highlight" style="background-color: lightgreen;">Don't miss out on this once-in-a-lifetime experience. Book your adventure today!</span></p>
        
        
        
                  </div>
              </div>
          </div>
        </div>
    </body>
    @include('theme.partials.footer') 
</html>










