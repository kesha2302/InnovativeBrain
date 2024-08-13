@extends('AdminPanel.layout.main')

@section('main-container')
      <div class="container" style=" background: rgb(205, 232, 244)">
<h1 class="pt-3">InnoBrain Technologies</h1>

            <div class="row">
                <div class="col">
                    <div class="card mb-3 mt-3 border  shadow-lg rounded" style="max-width: 600px; height:10rem">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('AdminPanel/assets/images/profile/client.png')}}" class="img-fluid rounded ms-5 me-5 mt-5 mb-5" height="50px" width="60px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h3>Succesfull Clients</h3>
                                    <h4 class="card-text">{{$totalClient}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 mt-3 border  shadow-lg rounded" style="max-width: 600px; height:10rem">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('AdminPanel/assets/images/profile/internship.png')}}" class="img-fluid rounded ms-5 me-5 mt-5 mb-5" height="50px" width="60px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h3>Total Interns</h3>
                                    <h4 class="card-text">{{$totalInterns}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 mt-3 border  shadow-lg rounded" style="max-width: 600px; height:10rem">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('AdminPanel/assets/images/profile/services.png')}}" class="img-fluid rounded ms-5 me-5 mt-5 mb-5" height="50px" width="60px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h3>Total Services</h3>
                                    <h4 class="card-text">{{$totalServices}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="card mb-3 mt-3 border  shadow-lg rounded" style="max-width: 600px; height:10rem">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('AdminPanel/assets/images/profile/certificate.png')}}" class="img-fluid rounded ms-5 me-5 mt-5 mb-5" height="50px" width="60px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h3>Certificate Issued</h3>
                                    <h4 class="card-text">{{$Certificate}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">

                  </div>
                  <div class="col">

                  </div>

              </div>


                  </div>




  @endsection
