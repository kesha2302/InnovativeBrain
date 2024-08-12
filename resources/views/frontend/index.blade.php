@extends('frontend.layout.main')

@section('main-container')
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="frontend/img/course-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h2 class="text-primary text-uppercase mb-3 animated slideInDown">
                                Make The World
                                A Better Place With Skill</h2
                                >
                            <h2 class="display-8 text-white animated slideInDown">The Future Belongs To Those Who Learn More Skills And Combine Them In Creative Ways</h2>
                            {{-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> --}}
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> --}}
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            {{-- <img class="img-fluid" src="frontend/img/cat-2.jpg" alt=""> --}}
            <img class="img-fluid" src="https://img.freepik.com/free-photo/workers-it-company-working-computer_1303-19428.jpg?w=740&t=st=1722486649~exp=1722487249~hmac=bb8bedeb66791b3d483d007c612da63fa8358dc6516855da45cc5d214092bd07" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h1 class="text-primary text-uppercase mb-3 animated slideInDown">Internship</h1>
                            <h3 class="display-7 text-white animated slideInDown">We provide internship opportunities on different IT domains.</h3>
                            <p class="fs-5 text-white mb-4 pb-2">Get Educated Online From Your Home</p>
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> --}}
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="https://img.freepik.com/free-photo/modern-equipped-computer-lab_23-2149241213.jpg?t=st=1722486833~exp=1722490433~hmac=defda84db7589942fd917e873d8c86e25a2bcb1105c189253ac1302707aca7d9&w=740" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h2 class="text-primary text-uppercase mb-3 animated slideInDown">
                                IT Training</h2
                                >
                            <h2 class="display-8 text-white animated slideInDown">We also offer various types of basic to advanced IT trainings.</h2>
                            {{-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> --}}
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> --}}
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="https://img.freepik.com/free-photo/html-css-collage-concept-with-person_23-2150062008.jpg?t=st=1722487017~exp=1722490617~hmac=ca6e13df6478462afc7c16cb4eb7233244ba11e40221fe7d58b3a80e6ec52447&w=740" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h2 class="text-primary text-uppercase mb-3 animated slideInDown">
                                 Project Development</h2
                                >
                            <h2 class="display-8 text-white animated slideInDown">We also offer various types of basic to advanced IT trainings.</h2>
                            {{-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> --}}
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> --}}
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-rocket  mb-4"></i>
                        <h5 class="mb-3">IT Solutions</h5>
                        <p>We build Web, Mobile & all types of custom IT solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        {{-- <i class="fa fa-3x fa-globe  mb-4"></i> --}}
                        <i class="fa fa-3x fa-graduation-cap  mb-4"></i>
                        <h5 class="mb-3">Internship</h5>
                        <p>We provide internship opportunities on different IT domains.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe mb-4"></i>
                        <h5 class="mb-3">IT Training</h5>
                        <p>We also offer various types of basic to advanced IT trainings.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-laptop text-blue mb-4"></i>
                        <h5 class="mb-3">Live Projects</h5>
                        <p>We are currently involved in ongoing live projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<div class="p-03p3563 pagelayer-col pagelayer-col-6">
        <div class="pagelayer-col-holder">
            <img src="" alt="">
            <div class="p-bwf1504 pagelayer-heading">
                <div class="pagelayer-heading-holder">
                    <h3>InnoBrain Technologies</h3>
                </div>
            </div>
            <div class="p-zdd5470 pagelayer-divider">
                <div class="pagelayer-divider-holder">
                    <span class="pagelayer-divider-seperator"></span>
                </div>
            </div>
            <div class="p-k0w3472 pagelayer-heading">
                <a href="32" class="pagelayer-link-sel">
                    <div class="pagelayer-heading-holder">
                        <p> </p>
                    </div>
                </a>
            </div>
            <div class="p-7qm3437 pagelayer-progress">
                <div class="pagelayer-progress-title">IT Solutions</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" style="width: 40.5%;">
                        <span class="pagelayer-progress-percent">75%</span>
                    </div>
                </div>
            </div>
            <div class="p-qza8928 pagelayer-progress">
                <div class="pagelayer-progress-title">Internship</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" style="width: 45.5%;">
                        <span class="pagelayer-progress-percent">89%</span>
                    </div>
                </div>
            </div>
            <div class="p-boa719 pagelayer-progress">
                <div class="pagelayer-progress-title">IT Training</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" style="width: 57.5%;">
                        <span class="pagelayer-progress-percent">95%</span>
                    </div>
                </div>
            </div>
            <div class="p-boa719 pagelayer-progress">
                <div class="pagelayer-progress-title">Project Development</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" style="width: 67.5%;">
                        <span class="pagelayer-progress-percent">95%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-70 h-100" src="frontend/img/ss.png" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> --}}
                <h1 class="mb-4">Welcome to InnoBrain Technologies</h1>
                <p class="mb-4">InnoBrain Technologies is an MSME registered IT organization based out in V.V. Nagar, Anand, Gujarat.
                <p class="mb-4"> We, at InnoBrain Technologies, primarily focus on providing requirement based IT Solutions.</p>
                <p class="mb-4"> We provide IT Training on various Programming Languages, Software Tools & Technologies in Offline/Online Mode to aspirants willing to make/switch career in IT Industry along with Job Placement Assistance.</p>
                <p class="mb-4"> We also provide Internship Opportunities with the aim to bridge the gap between Industry and Academia.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color: #004a7c"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2" style="color: #004a7c"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color: #004a7c"></i>International Certificate</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2" style="color: #004a7c"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right me-2" style="color: #004a7c"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color: #004a7c"></i>International Certificate</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
