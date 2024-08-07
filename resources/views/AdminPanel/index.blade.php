@extends('AdminPanel.layout.main')

@section('main-container')
      <div class="container " style="background: rgb(219, 244, 254)">
<h1>Hello</h1>
            {{-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-3 mt-3 border  shadow-lg rounded" style="max-width: 600px; height:14rem">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{('frontend/img/gamer.png')}}" class="img-fluid rounded mt-2 mb-2 mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h3>Total Customers</h3>
                                    <h4 class="card-text">{{$totalUsers}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row justify-content-center text-center">
            <h3 class="mt-3">Fixed Package Details</h3>

            <div class="container text-center mt-3">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="card border shadow-lg rounded"  style="height: 11rem;">
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col">
                                  <h4>Total Pacakges</h4>
                                  <br>
                                  <h5>{{$totalPackages}}</h5>
                                </div>
                                <div class="col">
                                    <img src="{{('frontend/img/package_icon.png')}}" class="img-fluid rounded mx-auto" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="col">
                    <div class="card border shadow-lg rounded">
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col">
                                  <h4>Popular Packages</h4>
                                  <br>
                                  <h5>{{$popularpackage}}</h5>
                                </div>
                                <div class="col">
                                    <img src="{{('frontend/img/best.png')}}" class="img-fluid rounded mx-auto" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="col">
                    <div class="card  border shadow-lg rounded">
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col">
                                  <h4>Total Bookings</h4>
                                  <br>
                                  <h5>{{$totalBookings}}</h5>
                                </div>
                                <div class="col">
                                    <img src="{{('frontend/img/booking.png')}}" class="img-fluid rounded mx-auto" alt="...">
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div> --}}

    </div>
  @endsection
